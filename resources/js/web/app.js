import Alpine from 'alpinejs';
import $ from "jquery";
import swal from 'sweetalert';
import Toastify from 'toastify-js';
const feather = require('feather-icons');

window.swal = swal;
window.Alpine = Alpine;
window.Toastify = Toastify;
window.jQuery = window.$ = $
window.feather = feather;
feather.replace();
Alpine.start();
