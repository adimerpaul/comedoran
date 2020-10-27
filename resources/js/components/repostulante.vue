<template>
    <div class="container">
        <div class="container">
            <div id="navSection" data-spy="affix" class="nav  sidenav">
                <div class="sidenav-content">
                    <a href="#basic" class="active nav-link">Basic</a>
                    <a href="#email" class="nav-link">Email</a>
                    <a href="#select" class="nav-link">Select</a>
                    <a href="#custom_styles" class="nav-link">Custom Styles</a>
                    <a href="#browser_default" class="nav-link">Browser Default</a>
                    <a href="#tooltips" class="nav-link">Tooltips</a>
                </div>
            </div>
            <div class="row layout-top-spacing">
                <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Basic</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="simple-example" action="javascript:void(0);" novalidate>
                                <div class="form-row">
                                    <div class="col-md-12 mb-4">
                                        <label for="fullName">Full Name</label>

                                        <input type="text" class="form-control" id="fullName" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please fill the name
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary submit-fn mt-2" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

