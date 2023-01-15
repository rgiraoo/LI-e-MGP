const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

var rowId = '0';
var grandTotal = 0;
function addItem() {

    var dynamicTable = document.getElementById("dynamic-row");
    var prodectName = document.getElementById("product-name");
    var unit = document.getElementById("unit");
    var unitPrice = document.getElementById("unit-price");
    var row = document.createElement("tr");
    row.setAttribute('id', rowId);
    var product = document.createElement("td");

    var tdUnit = document.createElement("td");

    var tdUnitPrice = document.createElement("td");

    var total = document.createElement("td");

    var editDelete = document.createElement("td");

    var deletButton = document.createElement("button");
    deletButton.setAttribute('id', "del");
    deletButton.textContent = 'delete';
    var functionWithArgumentForDelete = "deleteItem(" + "'dynamic-row','" + (rowId) + "')";
    deletButton.setAttribute("OnClick", functionWithArgumentForDelete);

    var editButton = document.createElement("button");
    editButton.setAttribute('id', "edit");
    editButton.textContent = 'edit';
    var functionWithArgumentForEdit = "editItem('" + (rowId++) + "')";
    editButton.setAttribute("OnClick", functionWithArgumentForEdit);

    if (unit.value == '' || unitPrice.value == '' || prodectName.value == '') {

        alert("Field requred !");
    }
    else {
        if (parseFloat(unit.value) <=0 || parseFloat(unitPrice.value) <=0) {

            alert("Unit or Unit Price should not be -'ve' !");
        }
        else {
            if (isFloat(Number(unit.value))) {
                alert("unit should be integer value !");
            }
            else {

                product.textContent = prodectName.value;
                tdUnit.textContent = unit.value;
                tdUnitPrice.textContent = unitPrice.value;
                var totalvalue = (parseFloat(unitPrice.value) * parseFloat(unit.value));
                totalvalue = totalvalue.toFixed(2);
                grandTotal += parseFloat(totalvalue);
                total.textContent = totalvalue;
                editDelete.appendChild(deletButton);
                editDelete.appendChild(editButton);
                row.appendChild(product);
                row.appendChild(tdUnit);
                row.appendChild(tdUnitPrice);
                row.appendChild(total);
                row.appendChild(editDelete);
                dynamicTable.appendChild(row);
                document.getElementById('grand-total-1').innerHTML = grandTotal.toFixed(2);

            }

        }
    }

    document.getElementById("product-name").value = '';
    document.getElementById("unit").value = '';
    document.getElementById("unit-price").value = '';
    console.log(dynamicTable);
};

function deleteItem(tableId, rowId) {
    grandTotal -= document.getElementById(rowId).childNodes[3].innerHTML;
    document.getElementById('grand-total-1').innerHTML = grandTotal.toFixed(2);
    document.getElementById(tableId).removeChild(document.getElementById(rowId));
};
function editItem(rowId) {
    document.getElementById(rowId).childNodes[4].innerHTML = "<button id='save' onclick='saveItem(" + rowId + ")'>save</button>"
    document.getElementById(rowId).childNodes[0].innerHTML = "<input type='text' class='input-boxes-on-edit' id='procuct-name" + rowId + "'" + "value=" + document.getElementById(rowId).childNodes[0].innerHTML + ">";
    document.getElementById(rowId).childNodes[2].innerHTML = "<input type='number' class='input-boxes-on-edit' id='unit-price" + rowId + "'" + "value=" + document.getElementById(rowId).childNodes[2].innerHTML + ">";
    document.getElementById(rowId).childNodes[1].innerHTML = "<input type='number' class='input-boxes-on-edit' id='unit" + rowId + "'" + "value=" + document.getElementById(rowId).childNodes[1].innerHTML + ">";
    grandTotal -= document.getElementById(rowId).childNodes[3].innerHTML;
};
function saveItem(rowId) {
    if (document.getElementById("unit-price" + rowId).value == '' || document.getElementById("unit" + rowId).value == '') {

        alert("Field requred !");
    }
    else {
        if (document.getElementById("unit-price" + rowId).value <= 0 || document.getElementById("unit" + rowId).value <= 0) {
            alert("Unit or Unit Price should not be -'ve' !");
        }
        else {
            if (isFloat(Number(document.getElementById("unit" + rowId).value))) {
                alert("unit should be integer value !");
            }
            else {
                document.getElementById(rowId).childNodes[4].innerHTML = "<button id='del' onclick= deleteItem(" + "'dynamic-row'," + rowId + ")>delete</button><button id='edit' onclick='editItem(" + rowId + ")'>edit</button>"
                document.getElementById(rowId).childNodes[3].innerHTML = "<td>" + (document.getElementById("unit-price" + rowId).value * document.getElementById("unit" + rowId).value).toFixed(2) + "</td>";
                document.getElementById(rowId).childNodes[2].innerHTML = "<td>" + document.getElementById("unit-price" + rowId).value + "</td>";
                document.getElementById(rowId).childNodes[1].innerHTML = "<td>" + document.getElementById("unit" + rowId).value + "</td>";
                document.getElementById(rowId).childNodes[0].innerHTML = "<td>" + document.getElementById("procuct-name" + rowId).value + "</td>";
                grandTotal += parseFloat(document.getElementById(rowId).childNodes[3].innerHTML);
                document.getElementById('grand-total-1').innerHTML = grandTotal.toFixed(2);
            }
        }
    }
};

window.onload = function () {
    this.productId = '0';
    this.grandTotal = 0;
};

function isFloat(n) {
    return Number(n) === n && n % 1 !== 0;
};

function printDocument(d) {
  var restorePage = document.body.innerHTML;
  var printable  = document.getElementById(d).innerHTML;
  document.body.innerHTML = printable;
  window.print();
  document.body.innerHTML = restorePage;
}



var taskInput = document.getElementById("new-task"); //new-task
var addButton = document.getElementsByTagName("button")[0]; //first button
var incompleteTasksHolder = document.getElementById("incomplete-tasks"); //incomplete-tasks
var completedTasksHolder = document.getElementById("completed-tasks"); //completed-tasks
var savegc = document.getElementById("gc"); //Save Grocery list


//New Task List Item
var createNewTaskElement = function(taskString) {
    //Create List Item
    var listItem = document.createElement("li");

    //input (checkbox)
    var checkBox = document.createElement("input"); // checkbox
    //label
    var label = document.createElement("label");
    //input (text)
    var editInput = document.createElement("input"); // text
    //button.edit
    var editButton = document.createElement("button");
    //button.delete
    var deleteButton = document.createElement("button");

    //Each element needs modifying

    checkBox.type = "checkbox";
    editInput.type = "text";

    editButton.innerText = "Edit";
    editButton.className = "edit";
    deleteButton.innerText = "Delete";
    deleteButton.className = "delete";

    label.innerText = taskString;

    //Each element needs appending
    listItem.appendChild(checkBox);
    listItem.appendChild(label);
    listItem.appendChild(editInput);
    listItem.appendChild(editButton);
    listItem.appendChild(deleteButton);

    return listItem;
}

//Add a new task
var addTask = function() {
    console.log("Add task...");
    //Create a new list item with the text from #new-task:
    var listItem = createNewTaskElement(taskInput.value);
    //Append listItem to incompleteTasksHolder
    incompleteTasksHolder.appendChild(listItem);
    bindTaskEvents(listItem, taskCompleted);

    taskInput.value = "";
}

//Edit an existing task
var editTask = function() {
    console.log("Edit task...");

    var listItem = this.parentNode;

    var editInput = listItem.querySelector("input[type=text");
    var label = listItem.querySelector("label");

    var containsClass = listItem.classList.contains("editMode");

    //if the class of the parent is .editMode
    if (containsClass) {
        //Switch from .editMode
        //label text become the input's value
        label.innerText = editInput.value;
    } else {
        //Switch to .editMode
        //input value becomes the label's text
        editInput.value = label.innerText;
    }

    //Toggle .editMode on the list item
    listItem.classList.toggle("editMode");

}

//Delete an existing task
var deleteTask = function() {
    console.log("Delete task...");
    var listItem = this.parentNode;
    var ul = listItem.parentNode;

    //Remove the parent list item from the ul
    ul.removeChild(listItem);
}

//Mark a task as complete
var taskCompleted = function() {
    console.log("Task complete...");
    //Append the task list item to the #completed-tasks
    var listItem = this.parentNode;
    completedTasksHolder.appendChild(listItem);
    bindTaskEvents(listItem, taskIncomplete);
}

//Mark a task as incomplete
var taskIncomplete = function() {
    console.log("Task incomplete...");
    //Append the task list item to the #incomplete-tasks
    var listItem = this.parentNode;
    incompleteTasksHolder.appendChild(listItem);
    bindTaskEvents(listItem, taskCompleted);
}

var bindTaskEvents = function(taskListItem, checkBoxEventHandler) {
    console.log("Bind list item events");
    //select taskListItem's children
    var checkBox = taskListItem.querySelector("input[type=checkbox]");
    var editButton = taskListItem.querySelector("button.edit");
    var deleteButton = taskListItem.querySelector("button.delete");

    //bind editTask to edit button
    editButton.onclick = editTask;

    //bind deleteTask to delete button
    deleteButton.onclick = deleteTask;

    //bind checkBoxEventHandler to checkbox
    checkBox.onchange = checkBoxEventHandler;
}

// var ajaxRequest = function() {
// 	console.log("AJAX request");
// }

//Set the click handler to the addTask function
addButton.addEventListener("click", addTask);
//addButton.addEventListener("click", ajaxRequest);

//cycle over incompleteTasksHolder ul list items
for (var i = 0; i < incompleteTasksHolder.children.length; i++) {
    //bind events to list item's children (taskCompleted)
    bindTaskEvents(incompleteTasksHolder.children[i], taskCompleted);
}

//cycle over completedTasksHolder ul list items
for (var i = 0; i < completedTasksHolder.children.length; i++) {
    //bind events to list item's children (taskIncomplete)
    bindTaskEvents(completedTasksHolder.children[i], taskIncomplete);
}

// --------------------------------------------------------------------

/*function home() {
    document.getElementById("gc").innerHTML = "";
}

function gc() {
    document.getElementById("gc").innerHTML = savegc;
}
*/

const links = document.querySelectorAll(".menu-sidebar > li");
const cards = document.querySelectorAll(".card");

[...links].map((link, index) => {
    link.addEventListener("click",()=>onLinkClick(link,index),false);
})

const onLinkClick = (link, currentIndex) => {
    console.log(link, currentIndex);
}

