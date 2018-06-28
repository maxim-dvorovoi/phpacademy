import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import site from '../../site.jpg'

class Project extends Component {
    render () {
        return (
        	<div className="Project">
                <div className="ldt-fade-in">
                    <h1><b>Project</b></h1>
                    <hr/>
                    <figure class="snip1477">
                        <img src={site}/>

                        <div class="title">
                            <div>
                                <h2>Дизайн</h2>
                                <h4>Студия</h4>
                            </div>
                        </div>

                        <figcaption>
                            <p>Рита Зимина</p>
                        </figcaption>

                        <a href="http://rita-zimina.000webhostapp.com/"></a>
                    </figure>
                </div>
            </div>
        )
    }
}

export default Project