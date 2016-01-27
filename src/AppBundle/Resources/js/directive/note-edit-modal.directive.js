(function () {
    angular.module('app')
            .directive('noteEditModal', noteEditModalDirective);

    noteEditModalDirective.$inject = ['$timeout', 'NoteService'];

    function noteEditModalDirective($timeout, NoteService)
    {
        return {
            templateUrl: "note-edit-modal.html",
            link: linkFunc
        };

        function linkFunc($scope, $element)
        {            
            $scope.closeModal = function ()
            {
                $element.find('.modal').closeModal();
            };

            $timeout(function ()
            {
                $('body').append($element);
                $element.find('.modal').openModal({
                    complete: function() { 
                        $scope.$broadcast("modal:closed");
                    } 
                });
            });
        }
    }
})();

