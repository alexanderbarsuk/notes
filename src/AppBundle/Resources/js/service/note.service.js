(function(){
	angular.module('app')
		.factory('NoteService', function($http)
		{
			return {
				getNotes: getNotes,
                getNote: getNote,
				saveNote: saveNote,
				createBlankNote: createBlankNote,
                deleteNote: deleteNote
			};

			function getNotes()
			{
				return $http.get('/note')
					.then(function(response)
					{
						return response.data;
					})
					.catch(function(error)
					{
						alert(getErrorMessage(error));
					})
				;
			}
            
            function getNote(id)
			{
				return $http.get('/note/' + id)
					.then(function(response)
					{
						return response.data;
					})
					.catch(function(error)
					{
						alert(getErrorMessage(error));
					})
				;
			}
            
            function addNote(note)
			{
				return $http.post('/note', note)
					.then(function(response)
					{
						return response.data;
					})
					.catch(function(error)
					{
						alert(getErrorMessage(error));
					})
				;
			}
            
            function editNote(note)
            {
                return $http.put('/note/' + note.id, note)
					.then(function(response)
					{
						return response.data;
					})
					.catch(function(error)
					{
						alert(getErrorMessage(error));
					})
				;
            }

			function saveNote(note)
			{
				return (note.id) ? editNote(note) : addNote(note);
			}
            
            function deleteNote(note)
			{
				return $http.delete('/note/' + note.id, note)
					.then(function(response)
					{
						return response.data;
					})
					.catch(function(error)
					{
						alert(getErrorMessage(error));
					})
				;
			}

			function createBlankNote()
			{
				return {
					title: "",
					content: "",
                    size: 300
				};
			}

			function getErrorMessage(error)
			{
				return 'Error ' + error.status  + ': ' + error.statusText;
			}
		})
	;
})();