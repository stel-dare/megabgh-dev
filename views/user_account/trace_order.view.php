<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGAB - Trace Order</title>
    <style>
        /*! CSS Used from: http://gambolthemes.net/natto-new-demo/vendor/bootstrap/css/bootstrap.min.css */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        [tabindex="-1"]:focus {
            outline: 0 !important;
        }

        h1 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        button {
            border-radius: 0;
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        button {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        [type=button],
        button {
            -webkit-appearance: button;
        }

        [type=button]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        h1 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h1 {
            font-size: 2.5rem;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-12,
        .col-lg-4,
        .col-lg-8,
        .col-md-6 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width:768px) {
            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width:992px) {
            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
        }

        .fade {
            transition: opacity .15s linear;
        }

        @media (prefers-reduced-motion:reduce) {
            .fade {
                transition: none;
            }
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }

        .close:hover {
            color: #000;
            text-decoration: none;
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow-y:auto;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none;
            }
        }

        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none;
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }
        }

        @media (min-width:992px) {
            .modal-xl {
                max-width: 800px;
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            opacity: 0;
        }

        .mb-1 {
            margin-bottom: .25rem !important;
        }

        @media print {

            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important;
            }

            img {
                page-break-inside: avoid;
            }

            .container {
                min-width: 992px !important;
            }
        }

        /*! CSS Used from: http://gambolthemes.net/natto-new-demo/css/style.css */
        button {
            outline: 1px #fff !important;
            color: none;
        }

        h1 {
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            color: #000;
            margin-top: 0px;
            margin-bottom: 0px;
            text-transform: uppercase;
        }

        h1 {
            font-size: 54px;
            font-style: normal;
            font-weight: 700;
            line-height: 54px;
        }

        ul {
            margin: 0px;
            padding: 0px;
        }

        *::-moz-selection {
            background: #fff;
            color: #000;
            text-shadow: none;
        }

        ::-moz-selection {
            background: #fff;
            color: #000;
            text-shadow: none;
        }

        ::selection {
            background: #fff;
            color: #000;
            text-shadow: none;
        }

        div,
        span,
        iframe,
        h1,
        img,
        i,
        ul,
        li {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            text-transform: none;
        }

        ul {
            list-style: none;
        }

        ul li {
            padding: 0px;
            margin: 0px;
            line-height: 26px;
            display: inline-block;
        }

        button {
            outline: none;
        }

        * {
            margin: 0;
            padding: 0;
        }

        button {
            outline: none;
        }

        h1 {
            font-size: 2em;
            line-height: 1.25;
        }

        @media (min-width: 43.75em) {
            h1 {
                font-size: 2.5em;
                line-height: 1.125;
            }
        }

        @media (min-width: 56.25em) {
            h1 {
                font-size: 3em;
                line-height: 1.05;
            }
        }

        .my-checkout .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 0px;
            outline: 0;
        }

        .trace-model {
            width: 100%;
        }

        .trace-model .close {
            float: right;
            font-size: 24px;
            font-weight: 300;
            line-height: 1;
            color: #fff;
            text-shadow: 0 1px 0 #fff;
            opacity: 5;
            position: absolute;
            right: -18px;
            top: -18px;
        }

        .trace-map {
            padding: 0;
            margin: 0;
            position: relative;
            margin-bottom: -7px;
            height: 100%;
        }

        .trace-map iframe {
            display: none;
            width: 100%;
            height: 100%;
        }

        .trace-map img {
            width: 100%;
        }

        .mb-1 {
            padding: 0;
        }

        .right-order-dt {
            padding: 30px;
        }

        .right-order-dt .order-no {
            font-size: 14px;
            text-align: center;
            color: #000;
            border: 1px solid #e1e1e1;
            border-radius: 3px;
            background-color: rgb(255, 255, 255);
            width: 152px;
            height: 42px;
            padding: 14px;
        }

        .right-order-dt h1 {
            font-size: 24px;
            color: #000;
            font-weight: 600;
            line-height: 24px;
            padding: 47px 0 30px;
        }

        .resto-trace-star {
            text-align: left;
            font-size: 14px;
            color: #ffa803;
            font-weight: 400;
            margin-bottom: 0px;
        }

        .resto-trace-star span {
            padding: 5px 10px;
            font-size: 14px;
            color: #fff;
            font-weight: 400;
            background: #ffa803;
            border-radius: 50px;
            margin-left: 10px;
        }

        .trace-steps {
            margin: 50px 0px;
            list-style: none;
            position: relative;
        }

        .trace-steps:before {
            content: '';
            width: 1px;
            height: 100%;
            background-color: #ffa803;
            top: 0px;
            position: absolute;
            left: 7px;
        }

        .trace-steps li {
            display: block;
            margin: 30px 0;
            list-style: none;
        }

        .trace-steps ul li:before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border: 1px solid #ffa803;
            background: #fff;
            border-radius: 50%;
        }

        .trace-steps ul li:hover::before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border: 1px solid #ffa803;
            background: #ffa803;
            border-radius: 50%;
        }

        .trace-steps ul li.active::before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border: 1px solid #ffa803;
            background: #ffa803;
            border-radius: 50%;
        }

        .trace-steps li .steps-names {
            margin-left: 30px;
            line-height: 15px;
            font-size: 14px;
            font-weight: 500;
            color: #000;
        }

        .map-location-tooltip-3 .tooltip {
            position: absolute;
            z-index: 9;
            width: 2.2em;
            height: 2.2em;
            opacity: 1;
            cursor: pointer;
        }

        .map-location-tooltip-3 .tooltip-item-3 {
            width: 32px;
            height: 32px;
            left: 50%;
            top: 50%;
            margin: -15px 0 0 -15px;
            position: absolute;
            border-radius: 50%;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            -webkit-animation: pulse 0.6s infinite alternate;
            animation: pulse 0.6s infinite alternate;
            background-color: rgb(0, 0, 0, 0.1);
        }

        .map-location-tooltip-3 span.tooltip-item-3:before {
            background: #fff;
            border: 1px solid #ffa803;
            content: "";
            position: absolute;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            margin: 9px;
        }

        .map-location-tooltip-3 .tooltip:first-child {
            bottom: 22%;
            left: 35%;
        }

        .map-location-tooltip-3 .tooltip:nth-child(2) {
            bottom: 50%;
            left: 55%;
        }

        .map-location-tooltip-3 .tooltip-content-3 {
            position: absolute;
            z-index: 9999;
            width: 140px;
            top: 0;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 14px;
            font-weight: 400;
            font-family: "Roboto";
            text-align: center;
            color: #fff;
            opacity: 0;
            cursor: default;
            background-image: -moz-linear-gradient(90deg, rgb(227, 136, 2) 0%, rgb(255, 168, 3) 100%);
            background-image: -webkit-linear-gradient(90deg, rgb(227, 136, 2) 0%, rgb(255, 168, 3) 100%);
            background-image: -ms-linear-gradient(90deg, rgb(227, 136, 2) 0%, rgb(255, 168, 3) 100%);
            box-shadow: -5.706px 1.854px 4px 0px rgba(0, 0, 0, 0.15);
            pointer-events: none;
            -webkit-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -ms-font-smoothing: antialiased;
            -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
            -o-transition: opacity 0.3s, -o-transform 0.3s;
            -ms-transition: opacity 0.3s, -ms-transform 0.3s;
            -moz-transition: opacity 0.3s, -moz-transform 0.3s;
            transition: opacity 0.3s, transform 0.3s;
        }

        .map-location-tooltip-3 .tooltip-main-3 .tooltip-content-3 {
            left: -54px;
            top: -35px;
        }

        .map-location-tooltip-3 .tooltip:hover .tooltip-content-3 {
            opacity: 1;
        }

        .map-location-tooltip-3 .tooltip-content-3::before,
        .map-location-tooltip-3 .tooltip-content-3::after {
            content: '';
            position: absolute;
        }

        .map-location-tooltip-3 .tooltip-content-3::before {
            height: 100%;
            width: 0;
        }

        .map-location-tooltip-3 .tooltip-content-3::after {
            bottom: -15px;
            left: 0px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(194, 225, 245, 0);
            border-right-color: #e48902;
            border-width: 8px;
            margin-left: 62px;
            transform: rotate(270deg);
        }

        .map-location-tooltip-3 .tooltip-main-3 .tooltip-content-3::before,
        .map-location-tooltip-3 .tooltip-main-3 .tooltip-content-3::after {
            right: 99%;
        }

        .payment-method-dt {
            width: 100%;
            float: left;
            margin-bottom: 20px;
        }

        .attr-l {
            float: left;
            font-size: 14px;
            font-weight: 400;
            color: #000;
        }

        .attr-r {
            float: right;
            font-size: 14px;
            font-weight: 400;
            color: #847577;
        }

        .payment-tol-dt {
            width: 100%;
            float: left;
            padding: 20px 0;
            margin: 10px 0 30px;
            border-top: 1px solid #e1e1e1;
            border-bottom: 1px solid #e1e1e1;
        }

        .attr-l2 {
            float: left;
            font-size: 18px;
            font-weight: 500;
            color: #000;
        }

        .attr-r2 {
            float: right;
            font-size: 18px;
            font-weight: 500;
            color: #847577;
        }

        /*! CSS Used from: http://gambolthemes.net/natto-new-demo/css/responsive.css */
        @media (min-width: 1200px) {
            .container {
                max-width: 1170px;
            }
        }

        @media (max-width:1199px) {
            .container {
                max-width: 100%;
            }
        }

        @media (max-width:1099px) {
            .container {
                max-width: 100%;
            }
        }

        @media (max-width:1023px) {
            .container {
                max-width: 100%;
            }
        }

        @media only screen and (min-width:768px) and (max-width:999px) {
            .container {
                max-width: 100%;
            }
        }

        @media (max-width:992px) {
            .trace-map img {
                width: 100%;
            }
        }

        /*! CSS Used from: http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/css/all.min.css */
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .fa-star:before {
            content: "\f005";
        }

        .far {
            font-weight: 400;
        }

        .far,
        .fas {
            font-family: "Font Awesome 5 Free";
        }

        .fas {
            font-weight: 900;
        }

        /*! CSS Used keyframes */
        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
            }
        }

        @-ms-keyframes pulse {
            from {
                -ms-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -ms-transform: scale3d(1, 1, 1);
            }
        }

        @-o-keyframes pulse {
            from {
                -o-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -o-transform: scale3d(1, 1, 1);
            }
        }

        @-moz-keyframes pulse {
            from {
                -moz-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -moz-transform: scale3d(1, 1, 1);
            }
        }

        @keyframes pulse {
            from {
                -webkit-transform: scale3d(0.5, 0.5, 1);
                transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
            }
        }

        @-ms-keyframes pulse {
            from {
                -ms-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -ms-transform: scale3d(1, 1, 1);
            }
        }

        @-o-keyframes pulse {
            from {
                -o-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -o-transform: scale3d(1, 1, 1);
            }
        }

        @-moz-keyframes pulse {
            from {
                -moz-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -moz-transform: scale3d(1, 1, 1);
            }
        }

        @keyframes pulse {
            from {
                -webkit-transform: scale3d(0.5, 0.5, 1);
                transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
            }
        }

        @-ms-keyframes pulse {
            from {
                -ms-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -ms-transform: scale3d(1, 1, 1);
            }
        }

        @-o-keyframes pulse {
            from {
                -o-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -o-transform: scale3d(1, 1, 1);
            }
        }

        @-moz-keyframes pulse {
            from {
                -moz-transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -moz-transform: scale3d(1, 1, 1);
            }
        }

        @keyframes pulse {
            from {
                -webkit-transform: scale3d(0.5, 0.5, 1);
                transform: scale3d(0.5, 0.5, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        /*! CSS Used fontfaces */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto'), local('Roboto-Regular'), local('sans-serif'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: auto;
            src: url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-regular-400.eot);
            src: url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-regular-400.eot#iefix) format("embedded-opentype"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-regular-400.woff2) format("woff2"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-regular-400.woff) format("woff"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-regular-400.ttf) format("truetype"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-regular-400.svg#fontawesome) format("svg");
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: auto;
            src: url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-solid-900.eot);
            src: url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-solid-900.woff2) format("woff2"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-solid-900.woff) format("woff"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-solid-900.ttf) format("truetype"), url(http://gambolthemes.net/natto-new-demo/vendor/fontawesome-free/webfonts/fa-solid-900.svg#fontawesome) format("svg");
        }
    </style>
</head>

<body>
    <div class="modal fade show" tabindex="-1" id="trace" role="dialog" style="display: block;" aria-modal="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="trace-model">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="container mb-1">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="trace-map">
                                    <img src="http://gambolthemes.net/natto-new-demo/images/profile/trace-map.jpg"
                                        alt="">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6848.588137286094!2d75.8069355495411!3d30.878433570394723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a822f25912599%3A0xa51f780d31824240!2sShaheed+Bhagat+Singh+Nagar%2C+Ludhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1556363627043!5m2!1sen!2sin"
                                        style="border:0" allowfullscreen=""></iframe>
                                    <div class="map-location-tooltip-3">
                                        <div class="tooltip tooltip-main-3">
                                            <span class="tooltip-item-3"></span>
                                            <span class="tooltip-content-3">Order Location</span>
                                        </div>
                                        <div class="tooltip tooltip-main-3">
                                            <span class="tooltip-item-3"></span>
                                            <span class="tooltip-content-3">Your Location</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right-order-dt">
                                    <div class="order-no">Order No : #<?=$order_id?></div>
                                    <h1>MEGAB Online Store</h1>
                                    <!-- <div class="resto-trace-star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>4.5/5</span>
                                    </div> -->
                                    <div class="trace-steps">
                                        <ul>
                                            <!-- <li class="active">
                                                <div class="steps-names">Order Accepted</div>
                                            </li> -->
                                            <li class=<?=$order->state==='Processing'||'In Transit'? 'active':''?>>
                                                <div class="steps-names">Processing</div>
                                            </li>
                                            <li class=<?=$order->state==='In Transit'? 'active':''?>>
                                                <div class="steps-names">In Transit</div>
                                            </li>
                                            <li class=<?=$order->state==='Delivered'? 'active':''?>>
                                                <div class="steps-names">Delivered</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="payment-method-dt">
                                        <div class="attr-l">Payment Method</div>
                                        <div class="attr-r">Cash on Delivery</div>
                                    </div> -->
                                    <!-- <div class="payment-method-dt">
                                        <div class="attr-l">Discount Offer</div>
                                        <div class="attr-r">Natto50</div>
                                    </div> -->
                                    <div class="payment-tol-dt">
                                        <div class="attr-l2">Total Paid</div>
                                        <div class="attr-r2">GHS <?=$order->total_paid?></div>
                                    </div>
                                    <div class="payment-method-dt">
                                        <div class="attr-l">Estimated Delivery Time</div>
                                        <div class="attr-r">35 min</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>