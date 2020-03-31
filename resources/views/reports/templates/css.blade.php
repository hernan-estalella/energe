<style type="text/css">
    @font-face {
        font-family: 'Montserrat-ExtraBold';
        src: url({{storage_path('fonts/Montserrat-ExtraBold.ttf')}})  format('truetype');
    }
    @font-face {
        font-family: 'Montserrat';
        src: url({{storage_path('fonts/Montserrat.ttf')}})  format('truetype');
    }

    @page {
        margin: 25px 25px;
    }
    
    html,body {
      font-size: 1rem;
      font-family: 'Montserrat', sans-serif !important;
      color: #D67C2D !important;
    }

    header {
        position: fixed;
        top: -60px;
        left: 0px;
        right: 0px;
        height: 50px;
    }

    footer {
        position: fixed; 
        bottom: -25px; 
        left: 0px; 
        right: 0px;
        height: 60px;
    }
    
    .page-break {
        page-break-after: always;
    }

    p.fit {
        margin: 1px;
    }

    *.small {
        font-size: small;
    }

    *.smaller {
        font-size: x-small;
    }

    *.smallest {
        font-size: xx-small;
    }

    *.large {
        font-size: large;
    }

    *.larger {
        font-size: larger;
    }

    *.largest {
        font-size: x-large;
    }

    *.extra-bold {
        font-family: 'Montserrat-ExtraBold', sans-serif !important;
    }

    *.orange-energe {
        color: #D67C2D;
    }

    *.gray-energe {
        color: #7C7C7C !important;
    }

    table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
    }

    tr.bordered td {
        border: 1px solid #D67C2D;
    }

    tr.top-border td {
        border-top: 1px solid #D67C2D;
    }

    tr.bottom-border td {
        border-bottom: 1px solid #D67C2D;
    }

    tr.odd td {
        background-color: lightgray;
    }

    td {
        width: 1%;
        padding: 5px;
    }

    td.bordered {
        border: 1px solid #D67C2D;
    }

    td.top-border {
        border-top: 1px solid #D67C2D;
    }

    td.right-border {
        border-right: 1px solid #D67C2D;
    }

    td.left-border {
        border-left: 1px solid #D67C2D;
    }

    td.bottom-border {
        border-bottom: 1px solid #D67C2D;
    }

    td.centered {
        text-align: center;
    }

    td.rightered {
        text-align: right !important;
    }

    td.dark {
        background-color: gray;
    }

    td.energe-colored {
        background-color: #D67C2D !important;
        color: white !important;
    }

    td.odd {
        background-color: lightgray;
    }
 </style>