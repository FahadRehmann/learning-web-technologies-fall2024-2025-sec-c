function searchEmployeeByName() {
    var name = document.getElementById('empName').value;
    if (name.length > 0) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "crude.php?action=searchSuggestionsByName&name=" + name, true);
        xhr.onload = function() {
        if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                var suggestionsDiv = document.getElementById('suggestions');
                suggestionsDiv.innerHTML = '';
                if (data.length > 0) {
                    data.forEach(function(employee) {
                    var suggestion = document.createElement('div');
                    suggestion.classList.add('suggestion-item');
                    suggestion.textContent = employee.empName;
                    suggestion.onclick = function() {
                        document.getElementById('empName').value = employee.empName;
                        document.getElementById('companyName').value = employee.companyName;
                        document.getElementById('contactNo').value = employee.contactNo;
                        document.getElementById('userName').value = employee.userName;
                        suggestionsDiv.innerHTML = '';
                        };
                    suggestionsDiv.appendChild(suggestion);
                    });
                } else {
                suggestionsDiv.innerHTML = 'No suggestions found.';
                }
            }
        };
        xhr.send();
    } else {
    document.getElementById('suggestions').innerHTML = '';
    }
}
