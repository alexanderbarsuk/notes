(function () {
    angular.module('app')
            .directive('noteNew', function ($document)
            {
                return {
                    templateUrl: "note-new.html",
                    scope: true,
                    bindToController: {
                        notes: '='
                    },
                    controller: NoteNewController,
                    controllerAs: 'NoteNewCtrl',
                    link: function ($scope, $elem, $attr, $ctrl) {
                        $elem.bind('click', function (e) {
                            e.stopPropagation();
                        });
                        $document.bind('click', function () {
                            $scope.$apply(function(){
                                $scope.NoteNewCtrl.blankNote = null;
                           });
                        })
                    }
                };

                NoteNewController.$inject = ['$scope', 'NoteService'];

                function NoteNewController(NoteService)
                {
                    var vm = this;

                    vm.blankNote = null;

                    vm.createNote = createNote;
                    vm.onSaved = onSaved;

                    function createNote()
                    {
                        vm.blankNote = NoteService.createBlankNote();
                    }

                    function onSaved(savedNote)
                    {
                        if (savedNote)
                        {
                            vm.notes.unshift(savedNote);
                        }

                        vm.blankNote = null;
                    }

                }
            })
            ;
})();