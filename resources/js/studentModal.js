import "./bootstrap";

import "flowbite";

import { Modal } from "flowbite";

let element = document.getElementById("ban-modal");

const modal = new Modal(element);

window.openEditModalStudent = function (id) {
    document.getElementById("ban-modal").action = "http://127.0.0.1:8000/users/" + id;
    modal.show();
};