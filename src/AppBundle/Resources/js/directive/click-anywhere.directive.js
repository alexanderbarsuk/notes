//(function () {
//    angular.module('app')
//            .directive('clickAnywhere', function ($document) {
//                return {
//                    restrict: 'A',
//                    link: function ($scope, $elem, $attr, $ctrl) {
//                        $elem.bind('click', function (e) {
//                            e.stopPropagation();
//                        });
//                        $document.bind('click', function () {
//                            $scope.$emit("click:anywhere-else");
//                        })
//                    }
//                }
//            });
//})();