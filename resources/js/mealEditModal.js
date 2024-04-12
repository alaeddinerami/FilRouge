import "./bootstrap";

import "flowbite";

import { Modal } from "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);

window.openEditModal = function (id,name,description,price) {
    document.getElementById("edit_form").action = "http://127.0.0.1:8000/meal/" + id;
    console.log(id);
    document.getElementById("edit_name").value = name;
    document.getElementById("edit_description").value = description;
    document.getElementById("edit_price").value = price;
    modal.show();
};