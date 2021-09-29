<?php include 'top.php'?>

        <div class="row justify-content-sm-center" style="padding-top:30px;padding-left:15px;padding-right:15px;">
    	    <div class="col-sm-10 bg-white rounded-top">
            	<div class="row" style="height:20px;"></div>
            	<div class="row justify-content-sm-center">
                     <div class="col" style="color:#880000;font-size:24px">
                         <b>PROMOÇÕES</b>
                    </div>	
                </div>
                <div class="row" style="height:20px;"></div>
            	<div class="row ">
                     <div class="col-sm-8">
                        
                        
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip01">First name</label>
                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                    <div class="valid-tooltip">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Last name</label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltipUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                        <div class="invalid-tooltip">
                                            Please choose a unique and valid username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">City</label>
                                    <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">State</label>
                                    <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip05">Zip</label>
                                    <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                        <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                       
                        </script>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
<?php include 'foot.php'?>