import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';

class Experiences extends Component {
    render () {
        return (
        	<div className="Experiences">
                <h1><b>Experiences</b></h1>
                <hr/>
                
                <Tabs>
                    <TabList>
                        <Tab><h3><span>Education</span></h3></Tab>
                        <Tab><h3><span>Careers</span></h3></Tab>
                    </TabList>

                    <TabPanel>
                    <div className="Text1">
                        <h3>DUT University</h3>

                        <p>
                            <b>Сomputer engineering</b><br/>
                            The education was mainly C++ , C# , 
                            SQL based programming, and I also learned about 
                            SQL, PHP, MVC, UML and more.<br/><br/>
                            01.09.2014 - 23.06.2018
                        </p>
                    </div>

                    <div className="Text2">
                        <h3>PHP-Academy</h3>

                        <p>
                            <b>Full-stack web developer</b><br/>
                            In this course i learned about PHP , 
                            JavaScript , React , ES7 , MySql , Node.js , 
                            MongoDb , NPM , Gulp , MVC Git and more...<br/><br/>
                            31.01.2018 - current time
                        </p>
                    </div>
                    </TabPanel>
                    <TabPanel>
                    <div className="Text1">
                        <h3>Mi Store</h3>

                        <p>
                            <b>Shop assistant</b><br/>
                            Work in Mi store, have many diverse 
                            tasks and always need to be friendly 
                            and professional with customers<br/><br/>
                            01.12.2017 - 10.06.2018
                        </p>
                    </div>

                    <div className="Text2">
                        <h3>Freelance</h3>

                        <p>
                            <b>Junior Front-End</b><br/>
                            Work on customer project and improve 
                            my skills,work with: HTML5 , CSS3 , 
                            GULP , Boostrap , JavaScript<br/><br/>
                            01.12.2017 - 10.06.2018
                        </p>
                    </div>
                    </TabPanel>
                </Tabs>
              
            </div>
        )
    }
}

export default Experiences