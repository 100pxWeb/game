webpackHotUpdate(0,{

/***/ 397:
/***/ (function(module, exports, __webpack_require__) {

	eval("/* WEBPACK VAR INJECTION */(function(module) {/* REACT HOT LOADER */ if (true) { (function () { var ReactHotAPI = __webpack_require__(78), RootInstanceProvider = __webpack_require__(86), ReactMount = __webpack_require__(88), React = __webpack_require__(178); module.makeHot = module.hot.data ? module.hot.data.makeHot : ReactHotAPI(function () { return RootInstanceProvider.getRootInstances(ReactMount); }, React); })(); } try { (function () {\n\n'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nvar _react = __webpack_require__(178);\n\nvar _react2 = _interopRequireDefault(_react);\n\nvar _axios = __webpack_require__(348);\n\nvar _axios2 = _interopRequireDefault(_axios);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }\n\nfunction _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }\n\nvar Tavern = function (_React$Component) {\n    _inherits(Tavern, _React$Component);\n\n    function Tavern(props) {\n        _classCallCheck(this, Tavern);\n\n        var _this = _possibleConstructorReturn(this, (Tavern.__proto__ || Object.getPrototypeOf(Tavern)).call(this, props));\n\n        _this.state = {\n            task_id: null,\n            task_title: null,\n            task_content: null,\n            task_time: null,\n            task_reward: null,\n            task_gold_reward: null,\n            task_item_reward: null,\n            task_special_reward: null,\n\n            task2_id: null,\n            task2_title: null,\n            task2_content: null,\n            task2_time: null,\n            task2_reward: null,\n            task2_gold_reward: null,\n            task2_item_reward: null,\n            task2_special_reward: null\n        };\n        return _this;\n    }\n\n    _createClass(Tavern, [{\n        key: 'componentDidMount',\n        value: function componentDidMount() {\n            var self = this;\n            _axios2.default.get('http://localhost:8000/tavern_json').then(function (res) {\n                console.log(res);\n                self.setState({\n                    task_id: res.data.task_info['id'],\n                    task_title: res.data.task_info['task_title'],\n                    task_content: res.data.task_info['task_content'],\n                    task_time: res.data.task_info['task_time'],\n                    task_reward: res.data.task_info['task_reward'],\n                    task_gold_reward: res.data.task_info['task_gold_reward'],\n                    task_item_reward: res.data.task_info['task_item_reward'],\n                    task_special_reward: res.data.task_info['task_special_reward'],\n\n                    task2_id: res.data.task_info['id'],\n                    task2_title: res.data.task2_info['task_title'],\n                    task2_content: res.data.task2_info['task_content'],\n                    task2_time: res.data.task2_info['task_time'],\n                    task2_reward: res.data.task2_info['task_reward'],\n                    task2_gold_reward: res.data.task2_info['task_gold_reward'],\n                    task2_item_reward: res.data.task2_info['task_item_reward'],\n                    task2_special_reward: res.data.task2_info['task_special_reward']\n                });\n            });\n        }\n    }, {\n        key: 'claimTask',\n        value: function claimTask() {\n            var post_data = {\n                task_id: this.state.task_id\n            };\n\n            _axios2.default.post('http://localhost:8000/claim_task', post_data).then(function (res) {\n                console.log(res);\n            });\n        }\n    }, {\n        key: 'render',\n        value: function render() {\n            return _react2.default.createElement(\n                'div',\n                { className: 'bar_view' },\n                _react2.default.createElement(\n                    'div',\n                    { id: 'task-list', className: 'available-tasks-list' },\n                    _react2.default.createElement('div', { id: 'close-icon', className: 'close-icon' }),\n                    _react2.default.createElement(\n                        'ul',\n                        null,\n                        _react2.default.createElement(\n                            'li',\n                            null,\n                            _react2.default.createElement(\n                                'button',\n                                { onClick: this.claimTask },\n                                'Przyjmij'\n                            )\n                        ),\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'task_preview' },\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_content' },\n                                this.state.task_content\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_complete_time' },\n                                'Czas: ',\n                                this.state.task_time\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Do\\u015Bwiadczenie: ',\n                                this.state.task_reward\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Z\\u0142oto: ',\n                                this.state.task_gold_reward\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Stamina:'\n                            ),\n                            _react2.default.createElement('div', { className: 'task_select' })\n                        ),\n                        _react2.default.createElement('li', null),\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'task_preview' },\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_content' },\n                                this.state.task2_content\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_complete_time' },\n                                'Czas: ',\n                                this.state.task2_time\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Do\\u015Bwiadczenie: ',\n                                this.state.task2_reward\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Z\\u0142oto: ',\n                                this.state.task2_gold_reward\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Stamina:'\n                            ),\n                            _react2.default.createElement('div', { className: 'task_select' })\n                        )\n                    )\n                )\n            );\n        }\n    }]);\n\n    return Tavern;\n}(_react2.default.Component);\n\nexports.default = Tavern;\n\n/* REACT HOT LOADER */ }).call(this); } finally { if (true) { (function () { var foundReactClasses = module.hot.data && module.hot.data.foundReactClasses || false; if (module.exports && module.makeHot) { var makeExportsHot = __webpack_require__(394); if (makeExportsHot(module, __webpack_require__(178))) { foundReactClasses = true; } var shouldAcceptModule = true && foundReactClasses; if (shouldAcceptModule) { module.hot.accept(function (err) { if (err) { console.error(\"Cannot apply hot update to \" + \"Tavern.js\" + \": \" + err.message); } }); } } module.hot.dispose(function (data) { data.makeHot = module.makeHot; data.foundReactClasses = foundReactClasses; }); })(); } }\n/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)(module)))//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9UYXZlcm4uanM/MDkwMyJdLCJuYW1lcyI6WyJUYXZlcm4iLCJwcm9wcyIsInN0YXRlIiwidGFza19pZCIsInRhc2tfdGl0bGUiLCJ0YXNrX2NvbnRlbnQiLCJ0YXNrX3RpbWUiLCJ0YXNrX3Jld2FyZCIsInRhc2tfZ29sZF9yZXdhcmQiLCJ0YXNrX2l0ZW1fcmV3YXJkIiwidGFza19zcGVjaWFsX3Jld2FyZCIsInRhc2syX2lkIiwidGFzazJfdGl0bGUiLCJ0YXNrMl9jb250ZW50IiwidGFzazJfdGltZSIsInRhc2syX3Jld2FyZCIsInRhc2syX2dvbGRfcmV3YXJkIiwidGFzazJfaXRlbV9yZXdhcmQiLCJ0YXNrMl9zcGVjaWFsX3Jld2FyZCIsInNlbGYiLCJnZXQiLCJ0aGVuIiwicmVzIiwiY29uc29sZSIsImxvZyIsInNldFN0YXRlIiwiZGF0YSIsInRhc2tfaW5mbyIsInRhc2syX2luZm8iLCJwb3N0X2RhdGEiLCJwb3N0IiwiY2xhaW1UYXNrIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7Ozs7QUFDQTs7Ozs7Ozs7Ozs7O0lBRU1BLE07OztBQUNGLG9CQUFZQyxLQUFaLEVBQWtCO0FBQUE7O0FBQUEsb0hBQ1JBLEtBRFE7O0FBRWQsY0FBS0MsS0FBTCxHQUFhO0FBQ1RDLHFCQUFTLElBREE7QUFFVEMsd0JBQVksSUFGSDtBQUdUQywwQkFBYyxJQUhMO0FBSVRDLHVCQUFXLElBSkY7QUFLVEMseUJBQWEsSUFMSjtBQU1UQyw4QkFBa0IsSUFOVDtBQU9UQyw4QkFBa0IsSUFQVDtBQVFUQyxpQ0FBcUIsSUFSWjs7QUFVVEMsc0JBQVUsSUFWRDtBQVdUQyx5QkFBYSxJQVhKO0FBWVRDLDJCQUFlLElBWk47QUFhVEMsd0JBQVksSUFiSDtBQWNUQywwQkFBYyxJQWRMO0FBZVRDLCtCQUFtQixJQWZWO0FBZ0JUQywrQkFBbUIsSUFoQlY7QUFpQlRDLGtDQUFzQjtBQWpC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LGNBQWY7QUFBQTtBQUFBLDZCQWJKO0FBZ0JJLG1FQUFLLFdBQVUsYUFBZjtBQWhCSix5QkFGSjtBQXVCSSxpRUF2Qko7QUF3Qkk7QUFBQTtBQUFBLDhCQUFLLFdBQVUsY0FBZjtBQUNJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFDSyxxQ0FBS04sS0FBTCxDQUFXVztBQURoQiw2QkFESjtBQUlJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLG9CQUFmO0FBQUE7QUFDVyxxQ0FBS1gsS0FBTCxDQUFXWTtBQUR0Qiw2QkFKSjtBQU9JO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFBQTtBQUNvQixxQ0FBS1osS0FBTCxDQUFXYTtBQUQvQiw2QkFQSjtBQVVJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFBQTtBQUNZLHFDQUFLYixLQUFMLENBQVdjO0FBRHZCLDZCQVZKO0FBYUk7QUFBQTtBQUFBLGtDQUFLLFdBQVUsY0FBZjtBQUFBO0FBQUEsNkJBYko7QUFnQkksbUVBQUssV0FBVSxhQUFmO0FBaEJKO0FBeEJKO0FBRko7QUFESixhQURKO0FBc0RIOzs7O0VBcEhnQixnQkFBTWdCLFM7O2tCQXVIWmhDLE0iLCJmaWxlIjoiMzk3LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcclxuaW1wb3J0IGF4aW9zIGZyb20gJ2F4aW9zJztcclxuXHJcbmNsYXNzIFRhdmVybiBleHRlbmRzIFJlYWN0LkNvbXBvbmVudCB7XHJcbiAgICBjb25zdHJ1Y3Rvcihwcm9wcyl7XHJcbiAgICAgICAgc3VwZXIocHJvcHMpO1xyXG4gICAgICAgIHRoaXMuc3RhdGUgPSB7XHJcbiAgICAgICAgICAgIHRhc2tfaWQ6IG51bGwsXHJcbiAgICAgICAgICAgIHRhc2tfdGl0bGU6IG51bGwsXHJcbiAgICAgICAgICAgIHRhc2tfY29udGVudDogbnVsbCxcclxuICAgICAgICAgICAgdGFza190aW1lOiBudWxsLFxyXG4gICAgICAgICAgICB0YXNrX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFza19nb2xkX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFza19pdGVtX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFza19zcGVjaWFsX3Jld2FyZDogbnVsbCxcclxuXHJcbiAgICAgICAgICAgIHRhc2syX2lkOiBudWxsLFxyXG4gICAgICAgICAgICB0YXNrMl90aXRsZTogbnVsbCxcclxuICAgICAgICAgICAgdGFzazJfY29udGVudDogbnVsbCxcclxuICAgICAgICAgICAgdGFzazJfdGltZTogbnVsbCxcclxuICAgICAgICAgICAgdGFzazJfcmV3YXJkOiBudWxsLFxyXG4gICAgICAgICAgICB0YXNrMl9nb2xkX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFzazJfaXRlbV9yZXdhcmQ6IG51bGwsXHJcbiAgICAgICAgICAgIHRhc2syX3NwZWNpYWxfcmV3YXJkOiBudWxsXHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgY29tcG9uZW50RGlkTW91bnQoKXtcclxuICAgICAgICB2YXIgc2VsZiA9IHRoaXM7XHJcbiAgICAgICAgYXhpb3MuZ2V0KCdodHRwOi8vbG9jYWxob3N0OjgwMDAvdGF2ZXJuX2pzb24nKVxyXG4gICAgICAgICAgICAudGhlbihmdW5jdGlvbiAocmVzKSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhyZXMpO1xyXG4gICAgICAgICAgICAgICAgc2VsZi5zZXRTdGF0ZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgdGFza19pZDogcmVzLmRhdGEudGFza19pbmZvWydpZCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2tfdGl0bGU6IHJlcy5kYXRhLnRhc2tfaW5mb1sndGFza190aXRsZSddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2tfY29udGVudDogcmVzLmRhdGEudGFza19pbmZvWyd0YXNrX2NvbnRlbnQnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrX3RpbWU6IHJlcy5kYXRhLnRhc2tfaW5mb1sndGFza190aW1lJ10sXHJcbiAgICAgICAgICAgICAgICAgICAgdGFza19yZXdhcmQ6IHJlcy5kYXRhLnRhc2tfaW5mb1sndGFza19yZXdhcmQnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrX2dvbGRfcmV3YXJkOiByZXMuZGF0YS50YXNrX2luZm9bJ3Rhc2tfZ29sZF9yZXdhcmQnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrX2l0ZW1fcmV3YXJkOiByZXMuZGF0YS50YXNrX2luZm9bJ3Rhc2tfaXRlbV9yZXdhcmQnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrX3NwZWNpYWxfcmV3YXJkOiByZXMuZGF0YS50YXNrX2luZm9bJ3Rhc2tfc3BlY2lhbF9yZXdhcmQnXSxcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgdGFzazJfaWQ6IHJlcy5kYXRhLnRhc2tfaW5mb1snaWQnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrMl90aXRsZTogcmVzLmRhdGEudGFzazJfaW5mb1sndGFza190aXRsZSddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2syX2NvbnRlbnQ6IHJlcy5kYXRhLnRhc2syX2luZm9bJ3Rhc2tfY29udGVudCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2syX3RpbWU6IHJlcy5kYXRhLnRhc2syX2luZm9bJ3Rhc2tfdGltZSddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2syX3Jld2FyZDogcmVzLmRhdGEudGFzazJfaW5mb1sndGFza19yZXdhcmQnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrMl9nb2xkX3Jld2FyZDogcmVzLmRhdGEudGFzazJfaW5mb1sndGFza19nb2xkX3Jld2FyZCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2syX2l0ZW1fcmV3YXJkOiByZXMuZGF0YS50YXNrMl9pbmZvWyd0YXNrX2l0ZW1fcmV3YXJkJ10sXHJcbiAgICAgICAgICAgICAgICAgICAgdGFzazJfc3BlY2lhbF9yZXdhcmQ6IHJlcy5kYXRhLnRhc2syX2luZm9bJ3Rhc2tfc3BlY2lhbF9yZXdhcmQnXVxyXG4gICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgfSlcclxuICAgIH1cclxuXHJcbiAgICBjbGFpbVRhc2soKXtcclxuICAgICAgICB2YXIgcG9zdF9kYXRhID0ge1xyXG4gICAgICAgICAgICB0YXNrX2lkOiB0aGlzLnN0YXRlLnRhc2tfaWQsXHJcbiAgICAgICAgfTtcclxuXHJcbiAgICAgICAgYXhpb3MucG9zdCgnaHR0cDovL2xvY2FsaG9zdDo4MDAwL2NsYWltX3Rhc2snLCBwb3N0X2RhdGEpXHJcbiAgICAgICAgICAgIC50aGVuKGZ1bmN0aW9uIChyZXMpIHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKHJlcyk7XHJcbiAgICAgICAgICAgIH0pXHJcbiAgICB9XHJcblxyXG4gICAgcmVuZGVyKCkge1xyXG4gICAgICAgIHJldHVybiAoXHJcbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYmFyX3ZpZXdcIj5cclxuICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJ0YXNrLWxpc3RcIiBjbGFzc05hbWU9XCJhdmFpbGFibGUtdGFza3MtbGlzdFwiPlxyXG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjbG9zZS1pY29uXCIgY2xhc3NOYW1lPVwiY2xvc2UtaWNvblwiPjwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgIDx1bD5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxidXR0b24gb25DbGljaz17dGhpcy5jbGFpbVRhc2t9PlByenlqbWlqPC9idXR0b24+PC9saT5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3ByZXZpZXdcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19jb250ZW50XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3RoaXMuc3RhdGUudGFza19jb250ZW50fVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfY29tcGxldGVfdGltZVwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEN6YXM6IHt0aGlzLnN0YXRlLnRhc2tfdGltZX1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3Jld2FyZHNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEb8Wbd2lhZGN6ZW5pZToge3RoaXMuc3RhdGUudGFza19yZXdhcmR9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19yZXdhcmRzXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgWsWCb3RvOiB7dGhpcy5zdGF0ZS50YXNrX2dvbGRfcmV3YXJkfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcmV3YXJkc1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFN0YW1pbmE6XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19zZWxlY3RcIj5cclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8bGk+PC9saT5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3ByZXZpZXdcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19jb250ZW50XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3RoaXMuc3RhdGUudGFzazJfY29udGVudH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX2NvbXBsZXRlX3RpbWVcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBDemFzOiB7dGhpcy5zdGF0ZS50YXNrMl90aW1lfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcmV3YXJkc1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERvxZt3aWFkY3plbmllOiB7dGhpcy5zdGF0ZS50YXNrMl9yZXdhcmR9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19yZXdhcmRzXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgWsWCb3RvOiB7dGhpcy5zdGF0ZS50YXNrMl9nb2xkX3Jld2FyZH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3Jld2FyZHNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTdGFtaW5hOlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfc2VsZWN0XCI+XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG5cclxuXHJcbiAgICAgICAgICAgICAgICAgICAgPC91bD5cclxuICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICApO1xyXG4gICAgfVxyXG59XHJcblxyXG5leHBvcnQgZGVmYXVsdCBUYXZlcm5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9UYXZlcm4uanMiXSwic291cmNlUm9vdCI6IiJ9");

/***/ })

})