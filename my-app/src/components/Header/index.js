import React, {Component} from 'react'
import {Link} from 'react-router-dom'
import './style.css'

class Header extends Component {
    render () {
        return (
            <header className="header">
                <ul className="navList">
                	<li><Link to="/" class="effect-underline"><b>Profile</b></Link></li>
	                <li><Link to="/experiences" class="effect-underline"><b>Experiences</b></Link></li>
	                <li><Link to="/abilities" class="effect-underline"><b>Abilities</b></Link></li>
	                <li><Link to="/project" class="effect-underline"><b>Project</b></Link></li>
	                <li><Link to="/contact" class="effect-underline"><b>Contact</b></Link></li>
                </ul>
            </header>
        )
    }
}

export default Header
