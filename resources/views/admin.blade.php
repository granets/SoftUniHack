@extends('layouts.masteradmin')

@section('sidebar')
    <nav class="navbar navbardefault navbarstatictop" role="navigation" style="marginbottom: 0">
        <div class="navbarheader">
            <button type="button" class="navbartoggle" datatoggle="collapse" datatarget=".navbarcollapse">
                <span class="sronly">Toggle navigation</span>
                <span class="iconbar"></span>
                <span class="iconbar"></span>
                <span class="iconbar"></span>
            </button>
            <a class="navbarbrand" href="index.html">SB Admin v2.0</a>
        </div>
        <! /.navbarheader >

        <ul class="nav navbartoplinks navbarright">
            <li class="dropdown">
                <a class="dropdowntoggle" datatoggle="dropdown" href="#">
                    <i class="fa faenvelope fafw"></i> <i class="fa facaretdown"></i>
                </a>
                <ul class="dropdownmenu dropdownmessages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pullright textmuted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pullright textmuted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pullright textmuted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="textcenter" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa faangleright"></i>
                        </a>
                    </li>
                </ul>
                <! /.dropdownmessages >
            </li>
            <! /.dropdown >
            <li class="dropdown">
                <a class="dropdowntoggle" datatoggle="dropdown" href="#">
                    <i class="fa fatasks fafw"></i> <i class="fa facaretdown"></i>
                </a>
                <ul class="dropdownmenu dropdowntasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pullright textmuted">40% Complete</span>
                                </p>

                                <div class="progress progressstriped active">
                                    <div class="progressbar progressbarsuccess" role="progressbar" ariavaluenow="40"
                                         ariavaluemin="0" ariavaluemax="100" style="width: 40%">
                                        <span class="sronly">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pullright textmuted">20% Complete</span>
                                </p>

                                <div class="progress progressstriped active">
                                    <div class="progressbar progressbarinfo" role="progressbar" ariavaluenow="20"
                                         ariavaluemin="0" ariavaluemax="100" style="width: 20%">
                                        <span class="sronly">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pullright textmuted">60% Complete</span>
                                </p>

                                <div class="progress progressstriped active">
                                    <div class="progressbar progressbarwarning" role="progressbar" ariavaluenow="60"
                                         ariavaluemin="0" ariavaluemax="100" style="width: 60%">
                                        <span class="sronly">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pullright textmuted">80% Complete</span>
                                </p>

                                <div class="progress progressstriped active">
                                    <div class="progressbar progressbardanger" role="progressbar" ariavaluenow="80"
                                         ariavaluemin="0" ariavaluemax="100" style="width: 80%">
                                        <span class="sronly">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="textcenter" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa faangleright"></i>
                        </a>
                    </li>
                </ul>
                <! /.dropdowntasks >
            </li>
            <! /.dropdown >
            <li class="dropdown">
                <a class="dropdowntoggle" datatoggle="dropdown" href="#">
                    <i class="fa fabell fafw"></i> <i class="fa facaretdown"></i>
                </a>
                <ul class="dropdownmenu dropdownalerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa facomment fafw"></i> New Comment
                                <span class="pullright textmuted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fatwitter fafw"></i> 3 New Followers
                                <span class="pullright textmuted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa faenvelope fafw"></i> Message Sent
                                <span class="pullright textmuted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fatasks fafw"></i> New Task
                                <span class="pullright textmuted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa faupload fafw"></i> Server Rebooted
                                <span class="pullright textmuted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="textcenter" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa faangleright"></i>
                        </a>
                    </li>
                </ul>
                <! /.dropdownalerts >
            </li>
            <! /.dropdown >
            <li class="dropdown">
                <a class="dropdowntoggle" datatoggle="dropdown" href="#">
                    <i class="fa fauser fafw"></i> <i class="fa facaretdown"></i>
                </a>
                <ul class="dropdownmenu dropdownuser">
                    <li><a href="#"><i class="fa fauser fafw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fagear fafw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fasignout fafw"></i> Logout</a>
                    </li>
                </ul>
                <! /.dropdownuser >
            </li>
            <! /.dropdown >
        </ul>
        <! /.navbartoplinks >

        <div class="navbardefault sidebar" role="navigation">
            <div class="sidebarnav navbarcollapse">
                <ul class="nav" id="sidemenu">
                    <li class="sidebarsearch">
                        <div class="inputgroup customsearchform">
                            <input type="text" class="formcontrol" placeholder="Search...">
                                <span class="inputgroupbtn">
                                <button class="btn btndefault" type="button">
                                    <i class="fa fasearch"></i>
                                </button>
                            </span>
                        </div>
                        <! /inputgroup >
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fadashboard fafw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fabarcharto fafw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav navsecondlevel">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <! /.navsecondlevel >
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fatable fafw"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa faedit fafw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fawrench fafw"></i> UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav navsecondlevel">
                            <li>
                                <a href="panelswells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="icons.html"> Icons</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <! /.navsecondlevel >
                    </li>
                    <li>
                        <a href="#"><i class="fa fasitemap fafw"></i> MultiLevel Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav navsecondlevel">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav navthirdlevel">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <! /.navthirdlevel >
                            </li>
                        </ul>
                        <! /.navsecondlevel >
                    </li>
                    <li>
                        <a href="#"><i class="fa fafileso fafw"></i> Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav navsecondlevel">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <! /.navsecondlevel >
                    </li>
                </ul>
            </div>
            <! /.sidebarcollapse >
        </div>
        <! /.navbarstaticside >
    </nav>
@endsection

@section('content')
    <!Start Content>
    <div id="pagewrapper">
        <div class="row">
            <div class="collg12">
                <h1 class="pageheader">Dashboard</h1>
            </div>
            <! /.collg12 >
        </div>
        <! /.row >
        <div class="row">
            <div class="collg3 colmd6">
                <div class="panel panelprimary">
                    <div class="panelheading">
                        <div class="row">
                            <div class="colxs3">
                                <i class="fa facomments fa5x"></i>
                            </div>
                            <div class="colxs9 textright">
                                <div class="huge">26</div>
                                <div>New Comments!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panelfooter">
                            <span class="pullleft">View Details</span>
                            <span class="pullright"><i class="fa faarrowcircleright"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="collg3 colmd6">
                <div class="panel panelgreen">
                    <div class="panelheading">
                        <div class="row">
                            <div class="colxs3">
                                <i class="fa fatasks fa5x"></i>
                            </div>
                            <div class="colxs9 textright">
                                <div class="huge">12</div>
                                <div>New Tasks!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panelfooter">
                            <span class="pullleft">View Details</span>
                            <span class="pullright"><i class="fa faarrowcircleright"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="collg3 colmd6">
                <div class="panel panelyellow">
                    <div class="panelheading">
                        <div class="row">
                            <div class="colxs3">
                                <i class="fa fashoppingcart fa5x"></i>
                            </div>
                            <div class="colxs9 textright">
                                <div class="huge">124</div>
                                <div>New Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panelfooter">
                            <span class="pullleft">View Details</span>
                            <span class="pullright"><i class="fa faarrowcircleright"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="collg3 colmd6">
                <div class="panel panelred">
                    <div class="panelheading">
                        <div class="row">
                            <div class="colxs3">
                                <i class="fa fasupport fa5x"></i>
                            </div>
                            <div class="colxs9 textright">
                                <div class="huge">13</div>
                                <div>Support Tickets!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panelfooter">
                            <span class="pullleft">View Details</span>
                            <span class="pullright"><i class="fa faarrowcircleright"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <! /.row >
        <div class="row">
            <div class="collg8">
                <div class="panel paneldefault">
                    <div class="panelheading">
                        <i class="fa fabarcharto fafw"></i> Area Chart Example
                        <div class="pullright">
                            <div class="btngroup">
                                <button type="button" class="btn btndefault btnxs dropdowntoggle" datatoggle="dropdown">
                                    Actions
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdownmenu pullright" role="menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <! /.panelheading >
                    <div class="panelbody">
                        <div id="morrisareachart"></div>
                    </div>
                    <! /.panelbody >
                </div>
                <! /.panel >
                <div class="panel paneldefault">
                    <div class="panelheading">
                        <i class="fa fabarcharto fafw"></i> Bar Chart Example
                        <div class="pullright">
                            <div class="btngroup">
                                <button type="button" class="btn btndefault btnxs dropdowntoggle" datatoggle="dropdown">
                                    Actions
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdownmenu pullright" role="menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <! /.panelheading >
                    <div class="panelbody">
                        <div class="row">
                            <div class="collg4">
                                <div class="tableresponsive">
                                    <table class="table tablebordered tablehover tablestriped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>10/21/2013</td>
                                            <td>3:29 PM</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>3325</td>
                                            <td>10/21/2013</td>
                                            <td>3:20 PM</td>
                                            <td>$234.34</td>
                                        </tr>
                                        <tr>
                                            <td>3324</td>
                                            <td>10/21/2013</td>
                                            <td>3:03 PM</td>
                                            <td>$724.17</td>
                                        </tr>
                                        <tr>
                                            <td>3323</td>
                                            <td>10/21/2013</td>
                                            <td>3:00 PM</td>
                                            <td>$23.71</td>
                                        </tr>
                                        <tr>
                                            <td>3322</td>
                                            <td>10/21/2013</td>
                                            <td>2:49 PM</td>
                                            <td>$8345.23</td>
                                        </tr>
                                        <tr>
                                            <td>3321</td>
                                            <td>10/21/2013</td>
                                            <td>2:23 PM</td>
                                            <td>$245.12</td>
                                        </tr>
                                        <tr>
                                            <td>3320</td>
                                            <td>10/21/2013</td>
                                            <td>2:15 PM</td>
                                            <td>$5663.54</td>
                                        </tr>
                                        <tr>
                                            <td>3319</td>
                                            <td>10/21/2013</td>
                                            <td>2:13 PM</td>
                                            <td>$943.45</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <! /.tableresponsive >
                            </div>
                            <! /.collg4 (nested) >
                            <div class="collg8">
                                <div id="morrisbarchart"></div>
                            </div>
                            <! /.collg8 (nested) >
                        </div>
                        <! /.row >
                    </div>
                    <! /.panelbody >
                </div>
                <! /.panel >
                <div class="panel paneldefault">
                    <div class="panelheading">
                        <i class="fa faclocko fafw"></i> Responsive Timeline
                    </div>
                    <! /.panelheading >
                    <div class="panelbody">
                        <ul class="timeline">
                            <li>
                                <div class="timelinebadge"><i class="fa facheck"></i>
                                </div>
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>

                                        <p>
                                            <small class="textmuted"><i class="fa faclocko"></i> 11 hours ago via
                                                Twitter
                                            </small>
                                        </p>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam
                                            dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum
                                            veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem
                                            dicta, debitis.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timelineinverted">
                                <div class="timelinebadge warning"><i class="fa facreditcard"></i>
                                </div>
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem
                                            quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis
                                            rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia
                                            repellendus.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores
                                            odit qui est tempora eos, nostrum provident explicabo dignissimos debitis
                                            vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timelinebadge danger"><i class="fa fabomb"></i>
                                </div>
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam
                                            facilis enim eaque, tenetur nam id qui vel velit similique nihil iure
                                            molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timelineinverted">
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est
                                            quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente
                                            rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut
                                            debitis!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timelinebadge info"><i class="fa fasave"></i>
                                </div>
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi
                                            quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam
                                            debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                        <hr>
                                        <div class="btngroup">
                                            <button type="button" class="btn btnprimary btnsm dropdowntoggle"
                                                    datatoggle="dropdown">
                                                <i class="fa fagear"></i> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdownmenu" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio
                                            quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia
                                            quam qui adipisci quas consequuntur nostrum sequi. Consequuntur,
                                            commodi.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timelineinverted">
                                <div class="timelinebadge success"><i class="fa fagraduationcap"></i>
                                </div>
                                <div class="timelinepanel">
                                    <div class="timelineheading">
                                        <h4 class="timelinetitle">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timelinebody">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati,
                                            quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus
                                            dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque
                                            eaque.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <! /.panelbody >
                </div>
                <! /.panel >
            </div>
            <! /.collg8 >
            <div class="collg4">
                <div class="panel paneldefault">
                    <div class="panelheading">
                        <i class="fa fabell fafw"></i> Notifications Panel
                    </div>
                    <! /.panelheading >
                    <div class="panelbody">
                        <div class="listgroup">
                            <a href="#" class="listgroupitem">
                                <i class="fa facomment fafw"></i> New Comment
                                                                    <span class="pullright textmuted small"><em>4
                                                                            minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa fatwitter fafw"></i> 3 New Followers
                                                                    <span class="pullright textmuted small"><em>12
                                                                            minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa faenvelope fafw"></i> Message Sent
                                                                    <span class="pullright textmuted small"><em>27
                                                                            minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa fatasks fafw"></i> New Task
                                                                    <span class="pullright textmuted small"><em>43
                                                                            minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa faupload fafw"></i> Server Rebooted
                                                                    <span class="pullright textmuted small"><em>11:32
                                                                            AM</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa fabolt fafw"></i> Server Crashed!
                                                                    <span class="pullright textmuted small"><em>11:13
                                                                            AM</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa fawarning fafw"></i> Server Not Responding
                                                                    <span class="pullright textmuted small"><em>10:57
                                                                            AM</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa fashoppingcart fafw"></i> New Order Placed
                                                                    <span class="pullright textmuted small"><em>9:49
                                                                            AM</em>
                                    </span>
                            </a>
                            <a href="#" class="listgroupitem">
                                <i class="fa famoney fafw"></i> Payment Received
                                                                    <span class="pullright textmuted small"><em>Yesterday</em>
                                    </span>
                            </a>
                        </div>
                        <! /.listgroup >
                        <a href="#" class="btn btndefault btnblock">View All Alerts</a>
                    </div>
                    <! /.panelbody >
                </div>
                <! /.panel >
                <div class="panel paneldefault">
                    <div class="panelheading">
                        <i class="fa fabarcharto fafw"></i> Donut Chart Example
                    </div>
                    <div class="panelbody">
                        <div id="morrisdonutchart"></div>
                        <a href="#" class="btn btndefault btnblock">View Details</a>
                    </div>
                    <! /.panelbody >
                </div>
                <! /.panel >
                <div class="chatpanel panel paneldefault">
                    <div class="panelheading">
                        <i class="fa facomments fafw"></i>
                        Chat
                        <div class="btngroup pullright">
                            <button type="button" class="btn btndefault btnxs dropdowntoggle" datatoggle="dropdown">
                                <i class="fa fachevrondown"></i>
                            </button>
                            <ul class="dropdownmenu slidedown">
                                <li>
                                    <a href="#">
                                        <i class="fa farefresh fafw"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa facheckcircle fafw"></i> Available
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fatimes fafw"></i> Busy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa faclocko fafw"></i> Away
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fasignout fafw"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <! /.panelheading >
                    <div class="panelbody">
                        <ul class="chat">
                            <li class="left clearfix">
                                                                    <span class="chatimg pullleft">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="imgcircle"/>
                                    </span>

                                <div class="chatbody clearfix">
                                    <div class="header">
                                        <strong class="primaryfont">Jack Sparrow</strong>
                                        <small class="pullright textmuted">
                                            <i class="fa faclocko fafw"></i> 12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                        ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                                                    <span class="chatimg pullright">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="imgcircle"/>
                                    </span>

                                <div class="chatbody clearfix">
                                    <div class="header">
                                        <small class=" textmuted">
                                            <i class="fa faclocko fafw"></i> 13 mins ago
                                        </small>
                                        <strong class="pullright primaryfont">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                        ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="left clearfix">
                                                                    <span class="chatimg pullleft">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="imgcircle"/>
                                    </span>

                                <div class="chatbody clearfix">
                                    <div class="header">
                                        <strong class="primaryfont">Jack Sparrow</strong>
                                        <small class="pullright textmuted">
                                            <i class="fa faclocko fafw"></i> 14 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                        ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                                                    <span class="chatimg pullright">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="imgcircle"/>
                                    </span>

                                <div class="chatbody clearfix">
                                    <div class="header">
                                        <small class=" textmuted">
                                            <i class="fa faclocko fafw"></i> 15 mins ago
                                        </small>
                                        <strong class="pullright primaryfont">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                        ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <! /.panelbody >
                    <div class="panelfooter">
                        <div class="inputgroup">
                            <input id="btninput" type="text" class="formcontrol inputsm"
                                   placeholder="Type your message here..."/>
                                                            <span class="inputgroupbtn">
                                    <button class="btn btnwarning btnsm" id="btnchat">
                                        Send
                                    </button>
                                </span>
                        </div>
                    </div>
                    <! /.panelfooter >
                </div>
                <! /.panel .chatpanel >
            </div>
            <! /.collg4 >
        </div>
        <! /.row >
    </div>
    <!End Content>

@endsection