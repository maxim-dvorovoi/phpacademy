import React, { Component } from 'react';
import Header from './components/Header'
import Footer from './components/Footer'
import Profile from './pages/Profile'
import Experiences from './pages/Experiences'
import Project from './pages/Project'
import Contact from './pages/Contact'
import Abilities from './pages/Abilities'
import NotFound from './pages/404'
import { Route, Switch } from 'react-router-dom';
import './App.css';

class App extends Component {
  render() {
    return (
      <div className="App">
      	<Header/>
	        <div>
            <Switch>
  	        	<Route exact path="/" component={Profile}/>
  	        	<Route path="/experiences" component={Experiences}/>
  	        	<Route path="/project" component={Project}/>
  	        	<Route path="/contact" component={Contact}/>
  	        	<Route path="/abilities" component={Abilities}/>
  	        	<Route path="*" component={NotFound} />
            </Switch>
	        </div>
        <Footer/>  
      </div>
    );
  }
}

export default App;
