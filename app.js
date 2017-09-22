var app = angular.module("app", ['ngSanitize']);

app.controller("scrapper", function($scope, $http, $q, $timeout) {
    var newsapi_org_apiKey = [
        // newsapi.org API key, you need to sign up for getting your key
        // or you can use API key used for examples in their API docs
        "d9980215642a4680b611905795d434b0",
    ];

    // return promise
    var $getSources = function() {
        return $http.get('https://newsapi.org/v1/sources?language=en');
    };

    var $getArticles = function(source) {
        var deferred = $q.defer();
        $http
            .get('https://newsapi.org/v1/articles?source=' + source + '&sortBy=latest&apiKey=' + newsapi_org_apiKey[0])
            .success(function(data) {
                console.log('get articles successfully');
                deferred.resolve({
                    articles: data.articles
                });
            })
            .error(function(msg, code) {
                deferred.reject(msg);
            });
        return deferred.promise;
    };

    $getSources().then(function(payload) {
        // step 1: retrieve array of source successfully
        $scope.array_of_sources = _.map(payload.data.sources, function(item) {
            return item.id;
        });

        // step 2: get articles from the sources
        // count_attempt counts the number of tries, we initialize it 0
        // the number of tries can't be bigger than array_of_sources' length
        var count_attempt = 0;

        function _try() {
            count_attempt += 1;

            // source assigned randomly from approximately 66 sources
            var source = $scope.array_of_sources[_.random(0, $scope.array_of_sources.length - 1)];

            // get articles from the source
            $getArticles(source).then(function(data) {
                // assign to $scope.articles if success
                $timeout(function() {
                    $scope.articles = data.articles;
                }, 1);

            }, function() {
                // remove source from array_of_sources if on failure
                $scope.array_of_sources = _.reject($scope.array_of_sources, function(item) {
                    return item == source;
                });

                // if total tries is in limit, try another source from array_of_sources
                if (count_attempt < $scope.array_of_sources.length) {
                    _try();
                }
            });
        }
        _try();
    });
});
