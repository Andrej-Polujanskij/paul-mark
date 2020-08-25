import $ from 'jquery';

import '../scss/style.scss';

import './map'
import './main'
import './scrollAnimated'

import fns from "./functions";

$(document).ready(function () {
    fns.init();
    fns.setVh();
});
