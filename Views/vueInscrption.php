    <script src="../js/inscription.js"></script>
    <link href="../css/inscription.css" rel="stylesheet">
    <!--LOGO-->
    <div id="logo_global">
        <img src="../image/page_connection/logo_soupape2.png" alt="logo" id="logo">
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
                                    <option value="01">1</option>  
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>  
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
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
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
                            <p><a href="../html/connection.html" id="haveAccount">Already have a account</a></p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>