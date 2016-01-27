(function(){
	angular.module('app')
		.directive('note', function()
		{
			return {
				templateUrl: "note.html",
                controller: NoteController,
                link: function($scope, $elem, $attr, $ctrl){
                    //console.log($scope.note);
//                    console.log(_.unescape($scope.note.content))
//                    $scope._= _;
                }
			};
            
            function NoteController($scope, NoteService)
			{
                $scope.editStatus = false;
                $scope.deleteNote = deleteNote;
                $scope.editNote = editNote;
                $scope.closeEdit = closeEdit;
                $scope.changeSize = changeSize;
                $scope.unescape = unescape;
                
                function deleteNote(note)
				{
                    if(!confirm("Are you sure?")){
                        return;
                    }
                    NoteService.deleteNote(note).then(function(){
                        $scope.notes.splice($scope.notes.indexOf(note), 1);
                    }); 
				}
                
                function changeSize(note)
                {
                    switch (note.size) {
                        case 300:
                            note.size = 620;
                            break;
                        case 620:
                            note.size = 300;
                            break;
                        default:
                            note.size = 300;
                            break;
                    }
                    $scope.$emit("masonry.reload");
                    NoteService.saveNote($scope.note).then(function (){}); 
                }
                
                function editNote(note)
                {
                    $scope.editStatus = true;
                    $scope.$emit("note-edit.open");
                }
                
                function closeEdit(note)
                {
                    $scope.editStatus = false;
                    $scope.$emit("note-edit.close");
                }
                
                function unescape(string){
                    return _.unescape(string);
                }
            }
		})
	;
})();
