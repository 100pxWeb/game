import React from 'react';
import {
    BrowserRouter as Router,
    Route,
    Link
} from 'react-router-dom';
import axios from 'axios';
import store from './Redux_store';

import Tavern from './Tavern';
import City from './City';

class AppComponent extends React.Component {
    constructor(props){
        super(props);
        this.state = {
            user_id: '',
            user_nick: '123',
            logged: false,

            gold: null,
            exp: null,
            stamina: null
        };
    }
    componentWillMount(){
        var self = this;

        axios.get('http://localhost:8000/controll_json')
            .then(function (response) {
                console.log(response);
                console.log(response.data.user_info['user_id']);

                self.setState({
                    gold: response.data.user_window_stats['user_gold'],
                    exp: response.data.user_window_stats['user_exp'],
                    stamina: response.data.user_window_stats['user_stamina']
                })
            })
    }
  render() {
    return (
        <Router>
        <div className="game_render">
          <div className="upper_panel">

          </div>
          <div className="main_handler">

          <div className="option_bar">
          <div className="logout">
          <a href="http://[::1]/game/logout"><span>Wyloguj</span></a>
      <div className="gold">
          <div className="icon"></div>
          <span>{this.state.gold}</span>
      </div>
      <div className="exp">
          <div className="icon"></div>
          <span>{this.state.exp}</span>
      </div>
      <div className="stamina">
          <div className="icon"></div>
          <span>{this.state.stamina}</span>
      </div>
      </div>
      <div className="options">
          <Link to="/"><span>Miasto</span></Link>
          <Link to="/tavern"><span>Tawerna</span></Link>
      </div>


      </div>

      <div className="load_game">
          <div className="border"></div>
          <Route exact path="/" component={City} />
          <Route path="/tavern" component={Tavern} />
      </div>
      </div>

      </div>
      </Router>
    );
  }
}

AppComponent.defaultProps = {
};

export default AppComponent;
