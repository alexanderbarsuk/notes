(function(){
	angular
        .module('app', ['templates', 'wu.masonry', 'ngSanitize', 'nl2br'])
        .config(config)
        .factory('_', function($window){return $window._});
    
    
    function config($sceProvider){
        $sceProvider.enabled(false);
    }
})();
