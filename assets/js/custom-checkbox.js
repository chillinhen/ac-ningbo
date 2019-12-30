"use strict";

const checkboxLabel = $('.form-group.custom-checkbox > label');
const checkboxNewContainer = $('.form-group.custom-checkbox .wpcf7-list-item');

const createBSCheckBox = () => {
    if(checkboxLabel) {
        const cloneCheckboxLabel = checkboxLabel.cloneNode(true);
        checkboxNewContainer.appendChild(cloneCheckboxLabel);
        checkboxNewContainer.classList.add('custom-control');
        checkboxNewContainer.classList.add('custom-checkbox');
        $('.form-group.custom-checkbox .wpcf7-list-item > input').classList.add('custom-control-input');
        $('.form-group.custom-checkbox .wpcf7-list-item > label').classList.add('custom-control-label');
        if($('.form-group.custom-checkbox .wpcf7-list-item > label').classList.contains('custom-control-label')) {
            $('.form-group.custom-checkbox > label').remove();
        }
    }

};

createBSCheckBox();
