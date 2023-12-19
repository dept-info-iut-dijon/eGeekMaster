<!-- author: Théo Cornu
author: Théo Cornu
author : Lola Cohidon-->
<link rel="stylesheet" href="Public/css/reference2.css">
<?php include 'companion.php'; ?>
<div id="ContaintReference">
    <!--Search bar-->
    <div class="search">
        <div class="search-box">
            <div class="search-field">
                <input list="TaskProp" placeholder="Search..." id="research" class="input" type="text">
                <datalist id="TaskProp">
                    <option value="Cleaning">                                
                    <option value="Shopping">
                    <option value="Cooking">
                    <option value="Dishes">
                    <option value="Laundry">                                
                    <option value="ChildsPlay">
                    <option value="ChildrensJourney">                                
                    <option value="ParentJourney">                                
                    <option value="ParentCare">
                    <option value="Administrative">
                    <option value="PetCare">
                    <option value="Gardening">                               
                    <option value="DIY">
                    <option value="HouseholdManagement">
                </datalist> 
                <div class="search-box-icon">
                    <button class="btn-icon-content">
                        <i class="search-icon">
                            <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#fff"></path></svg>
                        </i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Reference table-->
    <!-- <div class="ReferenceTable"> -->
                    <table>
                        <tr>
                            <th class="thToDisplay">Activity</th>
                            <th class="thToNotDisplay">Descriptive</th>
                            <th class="thToNotDisplay">Value 1/4</th>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_cleaning.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Cleaning">Cleaning</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Cleaning surfaces, floors, sinks, toilets and household appliances.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_shopping.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Shopping">Shopping</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Purchase of all supplies necessary for the household (food, medications, furniture, DIY and garden equipment, children's clothing, etc.).</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_cooking.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Cooking">Cooking</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Creation of weekly menus, Meal preparation, Table setting and clearing.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay"> 
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_dishes.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Dishes">Dishes</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">By hand or using the dishwasher (loading and unloading). Storage in cupboards.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_laundry.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Laundry">Laundry</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Collecting (putting in the basket), sorting, washing, drying, ironing, and storing.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_childrenCare.png" alt="">
                                    </div>
                                    <div>
                                        <p id="ChildrensCare">ChildrensCare</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Physiological needs (getting up, washing, feeding, dressing, caring, and putting to bed).</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_childsPlay.png" alt="">
                                    </div>
                                    <div>
                                        <p id="ChildsPlay">ChildsPlay</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Organization (choosing the game, setting up), participation in activities (starting the game, overall participation, and cleaning up the game).</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_childrensJourney.png" alt="">
                                    </div>
                                    <div>
                                        <p id="ChildrensJourney">ChildrensJourney</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay" >To school, after-school care (recreation center + cafeteria), babysitter, friends, doctor, leisure activities (sports/culture).</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_parentJourney.png" alt="">
                                    </div>
                                    <div>
                                        <p id="ParentJourney">ParentJourney</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">For dependent parent.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_parentCare.png" alt="">
                                    </div>
                                    <div>
                                        <p id="ParentCare">ParentCare</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Assistance, care for a dependent parent, administrative management of files (health, home care, etc.), transportation (health, leisure).</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_administrative.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Administrative">Administrative</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Taxes, bills, administrative registrations, health insurance management, bank account management, subscriptions, mail posting, and making reservations.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_petCare.png" alt="">
                                    </div>
                                    <div>
                                        <p id="PetCare">PetCare</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Food, Washing/Brushing, Walk, Litter change, Vet appointment, Care for.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_gardening.png" alt="">
                                    </div>
                                    <div>
                                        <p id="Gardening">Gardening</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Any necessary outdoor tasks: mow, prune, treat, water, harvest.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_diy.png" alt="">
                                    </div>
                                    <div>
                                        <p id="DIY">DIY</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Repairs, necessary minor work (plaster, painting, plumbing, etc.).</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                        <tr>
                            <td class="tdToDisplay">
                                <div class="action">
                                    <div>
                                        <img class="icon" src="Public/image/page_reference/img_householdManagement.png" alt="">
                                    </div>
                                    <div>
                                        <p id="HouseholdManagement">Household Management</p>
                                    </div>
                                </div>
                            </td>
                            <td class="tdToNotDisplay">Service provider management (search, hiring, follow-up), availability management for parcel reception, leisure management.</td>
                            <td class="tdToNotDisplay">1</td>
                        </tr>
                    </table>
</div>
</div>

<script src="Public/Animation_js/reference.js"></script>

