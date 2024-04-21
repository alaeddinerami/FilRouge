import "./bootstrap";

import "flowbite";

import { Modal } from "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);

window.openEditModal = function (id,title,description) {
    document.getElementById("edit_form").action = `http://127.0.0.1:8000/article/${id}`;
    document.getElementById("edit_name").value = title;
    document.getElementById("edit_description").value = description;
    modal.show();
};