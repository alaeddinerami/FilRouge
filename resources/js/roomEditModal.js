import "./bootstrap";

import "flowbite";

import { Modal } from "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);

window.openEditModal = function (id,roomNumber,description,price,department) {
    document.getElementById("edit_form").action = "http://127.0.0.1:8000/room/" + id;
    document.getElementById("edit_roomNumber").value = roomNumber;
    document.getElementById("edit_description").value = description;
    document.getElementById("edit_price").value = price ;
    document.getElementById("edit_department").value = department;
    modal.show();
};