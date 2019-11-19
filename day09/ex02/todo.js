var ft_list;

window.onload = function () {
    document.querySelector("#new").addEventListener("click", Todo);
    ft_list = document.querySelector("#ft_list");
};

function Todo(){
    var todo = prompt("Опишите вашу задачу:", '');
    if (todo !== '') {
        addTodo(todo)
    }
}

function addTodo(todo){
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
}

function deleteTodo(){
    if (confirm("Вы хотите удалить задачу?")){
        this.parentElement.removeChild(this);
    }
}