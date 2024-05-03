import "./bootstrap";

import "flowbite";

import { Modal } from "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);

window.openEditModal2 = function (id,roomNumber,description,price,department) {
    document.getElementById("edit_form").action = "http://127.0.0.1:8000/room/" + id;
    console.log('test');
    document.getElementById("edit_roomNumber").value = roomNumber;
    document.getElementById("edit_description").value = description;
    document.getElementById("edit_price").value = price ;
    document.getElementById("edit_department").value = department;
    modal.show();
};