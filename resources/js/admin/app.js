import axios from 'axios';
window.axios = axios;
import Toastify from 'toastify-js';

window.Toastify = Toastify;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Alpine from 'alpinejs';
import Tagify from '@yaireo/tagify';
import swal from 'sweetalert';
import "./datatable";
import $ from "jquery";

window.swal = swal;

window.Tagify = Tagify;

window.Alpine = Alpine;

window.jQuery = window.$ = $

const feather = require('feather-icons');
feather.replace();
window.feather = feather;

Alpine.start();

$(document).ready( function () {
    $('.data-table:not(.ignore)').DataTable({ "order": [[ 0, "desc" ]], });
});

$('.table-dropdown button').click(function() {
    $(this).parent().toggleClass('active');
})
$('.table-dropdown button').blur(function(event) {
    if (!$(this).parent().contains(event.relatedTarget)) {
        $(this).parent().removeClass('active');
    }
});

const toggleSidebar = () => {
    document.getElementById('sidebar').classList.toggle("active");
}

window.toggleSidebar = toggleSidebar;

