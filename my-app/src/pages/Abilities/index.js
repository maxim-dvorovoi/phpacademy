import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import skills from '../../setting.png'
import language from '../../world.png'

class Abilities extends Component {
    render () {
        return (
        	<div className="Abilities">
                <h1><b>Abilities</b></h1>
                <hr/>

                <div>
                    <img src={skills}/>
	                <h3>Skills</h3>
	                <p>
		                HTML5, CSS3, JavaScript, Ajax, Bootstrap, Gulp, JSON, MVC, Node.js, NPM, OOP, PHP, React, Redux, REST API, SASS
	                </p>
                </div>

                <div>
                    <img src={language}/>
                	<h3>Language</h3>
                	<p>
                		<b>English:</b>  Intermediate<br/>
                		<b>Ukrainian:</b>  Native<br/>
                		<b>Russian:</b>  Native
                	</p>
                </div>

            </div>
        )
    }
}

export default Abilities