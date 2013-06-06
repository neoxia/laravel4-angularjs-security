angular.module('myApp')
    .factory('Authenticate', function($resource){
        return $resource("/service/authenticate/")
    })
    .factory('Movies', function($resource){
        return $resource("/service/movies")
    })
    .factory('Flash', function($rootScope){
        return {
            show: function(message){
                $rootScope.flash = message
            },
            clear: function(){
                $rootScope.flash = ""
            }
        }
    })