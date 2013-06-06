angular.module("myApp",['ngResource','ngSanitize'])
    .config(['$routeProvider',function($routeProvider){
        $routeProvider.when('/login',{templateUrl:'app/partials/login.html', controller: 'loginController'})
        $routeProvider.when('/',{templateUrl:'app/partials/home.html', controller: 'homeController'})
        $routeProvider.otherwise({redirect:'/'})
    }]).config(function($httpProvider){

        var interceptor = function($rootScope,$location,$q,Flash){

        var success = function(response){
            return response
        }

        var error = function(response){
            if (response.status = 401){
                //delete sessionStorage.authenticated
                $location.path('/login')
                Flash.show(response.data.flash)

            }
            return $q.reject(response)

        }
            return function(promise){
                return promise.then(success, error)
            }
        }
        $httpProvider.responseInterceptors.push(interceptor)
    }).run(function($http,CSRF_TOKEN){
        $http.defaults.headers.common['csrf_token'] = CSRF_TOKEN;
    })