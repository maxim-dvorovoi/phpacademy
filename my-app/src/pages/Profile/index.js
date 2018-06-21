import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import logo from '../../img.jpg'

class Profile extends Component {
    render () {
        return (
        	<div className="Profile">
            	<h1>Profile</h1>
            	<p>I'm a creative Full-Stack developer</p><hr/><br/>
            	
            	<div >
            		<br/>
	            	<h2>About me</h2>
	            	<p>I'm a responsible and self-confident person 
	            	I love structure and order and I also 
	            	stand for quality. I love spending 
	            	time on fixing little details and 
	            	optimizing web apps. Also I like 
	            	working in a team</p>
            	</div>
            	
                <img className="logo" src={logo} />
                <br/>
                <div>
                    <h2>Details<br/><br/></h2>
                    <p><b>Name:</b>  Maxim<br/><br/>
                    <b>Age:</b>  22<br/><br/>
                    <b>Location:</b>  Kyiv, Ukraine</p>

                </div>
            </div>
        )
    }
}

export default Profile