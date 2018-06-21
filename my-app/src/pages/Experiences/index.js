import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'

class Experiences extends Component {
    render () {
        return (
        	<div className="Experiences">
                <h1><b>Experiences</b></h1>
                <hr/>
                <h2>Education</h2><br/>
              

                <div>
	                <h3>DUT University</h3>
	                <p>
		                <b>Сomputer engineering</b><br/>
		                The education was mainly C++ , C# , 
		                SQL based programming, and I also learned about 
		                SQL, PHP, MVC, UML and more.<br/><br/>
		                2014 - current time
	                </p>
                </div>

                <div>
                	<h3>PHP-Academy</h3>
                	<p>
                		<b>Full-stack web developer</b><br/>
                		In this course i learned about PHP , 
                		JavaScript , React , ES7 , MySql , Node.js , 
                		MongoDb , NPM , Gulp , MVC Git and more...<br/><br/>
                		2018 - current time
                	</p>
                </div>
            </div>
        )
    }
}

export default Experiences