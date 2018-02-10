import React from 'react';
import axios from 'axios';

class Tavern extends React.Component {
    constructor(props){
        super(props);
        this.state = {
            task_title: null,
            task_content: null,
            task_time: null,
            task_reward: null,
            task_gold_reward: null,
            task_item_reward: null,
            task_special_reward: null,

            task2_title: null,
            task2_content: null,
            task2_time: null,
            task2_reward: null,
            task2_gold_reward: null,
            task2_item_reward: null,
            task2_special_reward: null
        }
    }
    componentDidMount(){
        var self = this;
        axios.get('http://localhost:8000/tavern_json')
            .then(function (res) {
                console.log(res);
                self.setState({
                    task_title: res.data.task_info['task_title'],
                    task_content: res.data.task_info['task_content'],
                    task_time: res.data.task_info['task_time'],
                    task_reward: res.data.task_info['task_reward'],
                    task_gold_reward: res.data.task_info['task_gold_reward'],
                    task_item_reward: res.data.task_info['task_item_reward'],
                    task_special_reward: res.data.task_info['task_special_reward'],
                    
                    task2_title: res.data.task2_info['task_title'],
                    task2_content: res.data.task2_info['task_content'],
                    task2_time: res.data.task2_info['task_time'],
                    task2_reward: res.data.task2_info['task_reward'],
                    task2_gold_reward: res.data.task2_info['task_gold_reward'],
                    task2_item_reward: res.data.task2_info['task_item_reward'],
                    task2_special_reward: res.data.task2_info['task_special_reward']
                })
            })
    }

    render() {
        return (
            <div className="bar_view">
                <div id="task-list" className="available-tasks-list">
                    <div id="close-icon" className="close-icon"></div>
                    <ul>
                        <li></li>
                        <div className="task_preview">
                            <div className="task_content">
                                {this.state.task_content}
                            </div>
                            <div className="task_complete_time">
                                Czas: {this.state.task_time}
                            </div>
                            <div className="task_rewards">
                                Doświadczenie: {this.state.task_reward}
                            </div>
                            <div className="task_rewards">
                                Złoto: {this.state.task_gold_reward}
                            </div>
                            <div className="task_rewards">
                                Stamina:
                            </div>
                            <div className="task_select">

                            </div>
                        </div>

                        <li></li>
                        <div className="task_preview">
                            <div className="task_content">
                                {this.state.task2_content}
                            </div>
                            <div className="task_complete_time">
                                Czas: {this.state.task2_time}
                            </div>
                            <div className="task_rewards">
                                Doświadczenie: {this.state.task2_reward}
                            </div>
                            <div className="task_rewards">
                                Złoto: {this.state.task2_gold_reward}
                            </div>
                            <div className="task_rewards">
                                Stamina:
                            </div>
                            <div className="task_select">

                            </div>
                        </div>


                    </ul>
                </div>
            </div>
        );
    }
}

export default Tavern