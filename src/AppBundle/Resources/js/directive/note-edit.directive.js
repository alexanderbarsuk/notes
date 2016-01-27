(function () {
    angular.module('app')
            .directive('noteEdit', function ()
            {
                return {
                    templateUrl: "note-edit.html",
                    scope: true,
                    bindToController: {
                        note: '=noteEdit',
                        onSaveCallback: '=onSave'
                    },
                    controller: NoteEditController,
                    controllerAs: 'NoteEditCtrl'
                };
                
                NoteEditController.$inject = ['$scope', 'NoteService'];

                function NoteEditController($scope, NoteService)
                {
                    var vm = this;

                    vm.saveNote = saveNote;
                    $scope.$on("modal:closed", function(){
                        NoteService.getNote(vm.note.id).then(function (oldNote)
                        {
                            vm.note = oldNote;
                        });
                    });

                    function saveNote()
                    {
                        if (vm.note.title.length > 0 || vm.note.content.length > 0)
                        {
                            NoteService.saveNote(vm.note).then(function (savedNote)
                            {
                                vm.note = savedNote;

                                if (typeof vm.onSaveCallback === 'function')
                                {
                                    vm.onSaveCallback(vm.note);
                                }
                            });
                        }
                        else
                        {
                            vm.onSaveCallback(false);
                        }
                    }
                }
            })
            ;
})();