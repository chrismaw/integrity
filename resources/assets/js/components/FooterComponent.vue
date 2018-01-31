<template>
    <footer id="footer-desktop" class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-bottom" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/headerlogo.png"/></a>
                <button id="hamburger" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation" style="color:#60aec8">
                    <i class="fa-lg fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            {#<a class="nav-link js-scroll-trigger" href="#about">About</a>#}
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger dropdown" href="#download">Connect</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger dropdown" href="#contact">Resources</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--<div class="row">-->
        <!--<div class="col">-->
            <!--<drop-->
        <!--</div>-->
        <!--<div class="col text-center">-->
            <!--<p>Copyright &copy; {{ settings.church_name }}</p>-->
        <!--</div>-->
        <!--<div class="col text-center">-->
            <!--<p><a href="{{ app_uri }}admin/settings">Admin Login</a></p>-->
        <!--</div>-->
        <!--</div>-->
    </footer>
</template>

<script>
    export default {
        data () {
            return {
                visible: false
            }
        },
        methods: {
            handleOpen () {
                this.visible = true;
            },
            handleClose () {
                this.visible = false;
            }
        }
    }
</script>
