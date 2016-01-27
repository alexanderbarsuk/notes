(function () {
    angular.module('app')
            .controller('IndexController', function ($scope, $timeout, NoteService)
            {
                NoteService.getNotes().then(function (notes)
                {
                    $scope.notes = notes;
                });

            })
            ;
})();

