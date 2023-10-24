    <script src="Public/Animation_js/inscription.js"></script>
    <link href="Public/css/inscription1.css" rel="stylesheet">
    <!--LOGO-->
    <div id="logo_global">
        <img src="Public/image/page_connection/logo_soupape2.png" alt="logo" id="logo">
    </div>

    <!--REGISTRATION FORM-->
    <div class="container">
        <div id="form">

            <!--TITLE AND SUBTITLE-->
            <div>
                <h1>Create a new account</h1>
                <p id="subtitle">It's easy and fast</p>
            </div>

            <!--FORM-->
            <div>  
                <form action="../BackEnd/Script/Process.php" method="post">
                    <fieldset>
                        <!--NAME-->
                        <div>
                            <input name="Lastname" type="text" id="lastname" class="inputs enterText" placeholder="Lastname" maxlength="60" autofocus>
                            <input name="Firstname" type="text" id="firstname" class="inputs enterText" placeholder="Firstname" maxlength="40">
                        </div>
                        
                        <!--EMAIL-->
                        <div>
                            <input name="Email" type="text" id="email" class="inputs enterText" placeholder="Email" maxlength="100" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                        </div>  

                        <!--LOGIN-->
                        <div>
                            <input name="Username" type="text" id="username" class="inputs enterText" placeholder="Username" maxlength="20">
                            <input name="Password" type="password" id="password" class="inputs enterText" placeholder="Password" maxlength="30" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                        </div> 
                        
                        <!--BIRTHDATE-->
                        <div id="birthdate">
                            <label>Birthdate</label>
                            <div>
                                <select name="DayOfBirth" id="dayOfBirth" class="inputs date"> 
                                    <?php
                                    for ($i = 0; $i <= 31; $i++) {
                                        echo "<option value=\"$i\">$i</option>";
                                    }
                                    ?>
                                </select> 
                                <select name="MonthOfBirth" id="monthOfBirth" class="inputs date">
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>  
                                <select name="YearOfBirth" id="yearOfBirth" class="inputs date">
                                    <?php
                                    for ($i = 2023; $i >= 1923; $i--) {
                                        echo "<option value=\"$i\">$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>  
                        </div>

                        <!--GENDER-->
                        <div id="gender_title">
                            <label>Gender</label>
                            <div class="gender_global">
                                <div class="gender">
                                    <label for="woman">Woman</label>
                                    <input type="radio" id="woman" name="Gender" value="woman" class="inputs">
                                </div>
                                <div class="gender">
                                    <label for="Man">Man</label>
                                    <input type="radio" id="man" name="Gender" value="man" class="inputs">
                                </div>
                                <div class="gender">
                                    <label for="other">Other</label>
                                    <input type="radio" id="other" name="Gender" value="other" class="inputs">
                                </div>                
                            </div>
                        </div>

                        <!--FAMILY PLACE-->
                        <div>
                            <label for="placeFamily">What's your place in the family ?</label>
                            <div class="selectBox" onclick="showCheckboxes()">
                                <select id="select" name="selectPlaceFamily">
                                    <option>Select your place</option>
                                </select>
                                <div class="overSelect"></div>
                            </div>
                            <div id="checkboxes">
                                <label for="parent">
                                <input name="parent" value="parent" type="checkbox" id="parent" />Parent</label>
                                <label for="child">
                                <input name="child" value="child" type="checkbox" id="child" />Child</label>
                                <label for="grandParent">
                                <input name="grandParent" value="grandParent" type="checkbox" id="grandParent" />Grand parent</label>
                                <label for="grandChild">
                                <input name="grandChild" value="grandChild" type="checkbox" id="grandChild" />Grand child</label>
                                <label for="uncle/aunt">
                                <input name="uncle/aunt" value="uncle/aunt" type="checkbox" id="uncle/aunt" />Uncle/Aunt</label>
                                <label for="cousin">
                                <input name="cousin" value="cousin" type="checkbox" id="cousin" />Cousin</label>
                                <label for="nephew/niece">
                                <input name="nephew/niece" value="nephew/niece" type="checkbox" id="nephew/niece" />Nephew/Niece</label>
                                <label for="stepchild">
                                <input name="stepchild" value="stepchild" type="checkbox" id="stepchild" />Stepchild</label>
                                <label for="in-law">
                                <input name="in-law" value="in-law" type="checkbox" id="in-law" />In-law</label>
                                <label for="step-parent">
                                <input name="step-parent" value="step-parent" type="checkbox" id="step-parent" />Step-parent</label>
                                <label for="half-sibling">
                                <input name="half-sibling" value="half-sibling" type="checkbox" id="half-sibling" />Half-sibling</label>
                                <label for="otherPlace">
                                <input name="otherPlace" value="otherPlace" type="checkbox" id="otherPlace" />OtherPlace</label>
                            </div>
                        </div>

                        <!--CONDITIONS-->
                        <div>
                            <p id="conditions">
                                By clicking “Sign up”, you agree to our terms of service and acknowledge that you have read and understand our <a href="" class="chartes">privacy policy</a> and <a href="" class="chartes">code of conduct</a>.
                            </p>
                        </div>   
                        
                        <!--SIGN UP-->
                        <div id="submitDiv">
                            <input type="submit" value="Sign up" class="inputs" id="submit"> 
                        </div>

                        <!--HAVE A ACCOUNT-->
                        <div id="haveAccount_global">
                            <p><a href="index.php?action=Connection" id="haveAccount">Already have a account</a></p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>