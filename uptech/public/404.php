<div class="center-div">
    <h2
        style="    font-family: 'Coda'; font-size: 120px; text-align: center; margin:0px !important; padding:0px !important;">
        404</h2>

    <h3 style="text-align:center; font-family:'Coda'; ">Page Not Found</h3>

    <a href="home" style="text-decoration:none; color:#FFF; "><button class="btn red center-block"
            type="button"><span>Back To Home</span></button></a>
</div>



<style type="text/css">
.center-div {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 400px;
    height: 400px;

    border-radius: 3px;
}




.btn {
    position: relative;

    display: block;
    margin: 30px auto;
    padding: 0;

    overflow: hidden;

    border-width: 0;
    outline: none;
    border-radius: 2px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, .6);

    background-color: #2ecc71;
    color: #ecf0f1;

    transition: background-color .3s;
}

.btn:hover,
.btn:focus {
    background-color: #27ae60;
}

.btn>* {
    position: relative;
}

.btn span {
    display: block;
    padding: 12px 24px;
}

.btn:before {
    content: "";

    position: absolute;
    top: 50%;
    left: 50%;

    display: block;
    width: 0;
    padding-top: 0;

    border-radius: 100%;

    background-color: rgba(236, 240, 241, .3);

    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.btn:active:before {
    width: 120%;
    padding-top: 120%;

    transition: width .2s ease-out, padding-top .2s ease-out;
}

/* Styles, not important */
*,
*:before,
*:after {
    box-sizing: border-box;
}

html {
    position: relative;
    height: 100%;
}

body {
    position: absolute;
    top: 50%;
    left: 31%;

    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);

    background-color: #ecf0f1;
    color: #34495e;
    font-family: Trebuchet, Arial, sans-serif;
    text-align: center;
}

h2 {
    font-weight: normal;
}


.btn.red {
    background-color: #e74c3c;
}

.btn.red:hover,
.btn.red:focus {
    background-color: #c0392b;
}
</style>