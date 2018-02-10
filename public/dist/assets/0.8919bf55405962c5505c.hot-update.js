webpackHotUpdate(0,{

/***/ 397:
/***/ (function(module, exports, __webpack_require__) {

	eval("/* WEBPACK VAR INJECTION */(function(module) {/* REACT HOT LOADER */ if (true) { (function () { var ReactHotAPI = __webpack_require__(78), RootInstanceProvider = __webpack_require__(86), ReactMount = __webpack_require__(88), React = __webpack_require__(178); module.makeHot = module.hot.data ? module.hot.data.makeHot : ReactHotAPI(function () { return RootInstanceProvider.getRootInstances(ReactMount); }, React); })(); } try { (function () {\n\n'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nvar _react = __webpack_require__(178);\n\nvar _react2 = _interopRequireDefault(_react);\n\nvar _axios = __webpack_require__(348);\n\nvar _axios2 = _interopRequireDefault(_axios);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }\n\nfunction _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }\n\nvar Tavern = function (_React$Component) {\n    _inherits(Tavern, _React$Component);\n\n    function Tavern(props) {\n        _classCallCheck(this, Tavern);\n\n        var _this = _possibleConstructorReturn(this, (Tavern.__proto__ || Object.getPrototypeOf(Tavern)).call(this, props));\n\n        _this.state = {\n            task_title: null,\n            task_content: null,\n            task_time: null,\n            task_reward: null,\n            task_gold_reward: null,\n            task_item_reward: null,\n            task_special_reward: null\n        };\n        return _this;\n    }\n\n    _createClass(Tavern, [{\n        key: 'componentDidMount',\n        value: function componentDidMount() {\n            var self = this;\n            _axios2.default.get('http://localhost:8000/tavern_json').then(function (res) {\n                self.setState({\n                    task_title: res.data.task_info['task_title'],\n                    task_content: res.data.task_info['task_content'],\n                    task_time: res.data.task_info['task_time'],\n                    task_reward: res.data.task_info['task_reward'],\n                    task_gold_reward: res.data.task_info['task_gold_reward'],\n                    task_item_reward: res.data.task_info['task_item_reward'],\n                    task_special_reward: res.data.task_info['task_special_reward']\n                });\n            });\n        }\n    }, {\n        key: 'render',\n        value: function render() {\n            return _react2.default.createElement(\n                'div',\n                { className: 'bar_view' },\n                _react2.default.createElement(\n                    'div',\n                    { id: 'task-list', className: 'available-tasks-list' },\n                    _react2.default.createElement('div', { id: 'close-icon', className: 'close-icon' }),\n                    _react2.default.createElement(\n                        'ul',\n                        null,\n                        _react2.default.createElement('li', null),\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'task_preview' },\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_content' },\n                                this.state.task_content\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_complete_time' },\n                                'Czas: ',\n                                this.state.task_time\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Do\\u015Bwiadczenie: ',\n                                this.state.task_reward\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Z\\u0142oto: ',\n                                this.state.task_gold_reward\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Stamina:'\n                            ),\n                            _react2.default.createElement('div', { className: 'task_select' })\n                        ),\n                        _react2.default.createElement('li', null),\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'task_preview' },\n                            _react2.default.createElement('div', { className: 'task_content' }),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_complete_time' },\n                                'Czas:'\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Do\\u015Bwiadczenie:'\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Z\\u0142oto:'\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'task_rewards' },\n                                'Stamina:'\n                            ),\n                            _react2.default.createElement('div', { className: 'task_select' })\n                        )\n                    )\n                )\n            );\n        }\n    }]);\n\n    return Tavern;\n}(_react2.default.Component);\n\nexports.default = Tavern;\n\n/* REACT HOT LOADER */ }).call(this); } finally { if (true) { (function () { var foundReactClasses = module.hot.data && module.hot.data.foundReactClasses || false; if (module.exports && module.makeHot) { var makeExportsHot = __webpack_require__(394); if (makeExportsHot(module, __webpack_require__(178))) { foundReactClasses = true; } var shouldAcceptModule = true && foundReactClasses; if (shouldAcceptModule) { module.hot.accept(function (err) { if (err) { console.error(\"Cannot apply hot update to \" + \"Tavern.js\" + \": \" + err.message); } }); } } module.hot.dispose(function (data) { data.makeHot = module.makeHot; data.foundReactClasses = foundReactClasses; }); })(); } }\n/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)(module)))//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9UYXZlcm4uanM/MDkwMyJdLCJuYW1lcyI6WyJUYXZlcm4iLCJwcm9wcyIsInN0YXRlIiwidGFza190aXRsZSIsInRhc2tfY29udGVudCIsInRhc2tfdGltZSIsInRhc2tfcmV3YXJkIiwidGFza19nb2xkX3Jld2FyZCIsInRhc2tfaXRlbV9yZXdhcmQiLCJ0YXNrX3NwZWNpYWxfcmV3YXJkIiwic2VsZiIsImdldCIsInRoZW4iLCJyZXMiLCJzZXRTdGF0ZSIsImRhdGEiLCJ0YXNrX2luZm8iLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTs7OztBQUNBOzs7Ozs7Ozs7Ozs7SUFFTUEsTTs7O0FBQ0Ysb0JBQVlDLEtBQVosRUFBa0I7QUFBQTs7QUFBQSxvSEFDUkEsS0FEUTs7QUFFZCxjQUFLQyxLQUFMLEdBQWE7QUFDVEMsd0JBQVksSUFESDtBQUVUQywwQkFBYyxJQUZMO0FBR1RDLHVCQUFXLElBSEY7QUFJVEMseUJBQWEsSUFKSjtBQUtUQyw4QkFBa0IsSUFMVDtBQU1UQyw4QkFBa0IsSUFOVDtBQU9UQyxpQ0FBcUI7QUFQWixTQUFiO0FBRmM7QUFXakI7Ozs7NENBQ2tCO0FBQ2YsZ0JBQUlDLE9BQU8sSUFBWDtBQUNBLDRCQUFNQyxHQUFOLENBQVUsbUNBQVYsRUFDS0MsSUFETCxDQUNVLFVBQVVDLEdBQVYsRUFBZTtBQUNqQkgscUJBQUtJLFFBQUwsQ0FBYztBQUNWWCxnQ0FBWVUsSUFBSUUsSUFBSixDQUFTQyxTQUFULENBQW1CLFlBQW5CLENBREY7QUFFVlosa0NBQWNTLElBQUlFLElBQUosQ0FBU0MsU0FBVCxDQUFtQixjQUFuQixDQUZKO0FBR1ZYLCtCQUFXUSxJQUFJRSxJQUFKLENBQVNDLFNBQVQsQ0FBbUIsV0FBbkIsQ0FIRDtBQUlWVixpQ0FBYU8sSUFBSUUsSUFBSixDQUFTQyxTQUFULENBQW1CLGFBQW5CLENBSkg7QUFLVlQsc0NBQWtCTSxJQUFJRSxJQUFKLENBQVNDLFNBQVQsQ0FBbUIsa0JBQW5CLENBTFI7QUFNVlIsc0NBQWtCSyxJQUFJRSxJQUFKLENBQVNDLFNBQVQsQ0FBbUIsa0JBQW5CLENBTlI7QUFPVlAseUNBQXFCSSxJQUFJRSxJQUFKLENBQVNDLFNBQVQsQ0FBbUIscUJBQW5CO0FBUFgsaUJBQWQ7QUFTSCxhQVhMO0FBWUg7OztpQ0FFUTtBQUNMLG1CQUNJO0FBQUE7QUFBQSxrQkFBSyxXQUFVLFVBQWY7QUFDSTtBQUFBO0FBQUEsc0JBQUssSUFBRyxXQUFSLEVBQW9CLFdBQVUsc0JBQTlCO0FBQ0ksMkRBQUssSUFBRyxZQUFSLEVBQXFCLFdBQVUsWUFBL0IsR0FESjtBQUVJO0FBQUE7QUFBQTtBQUNJLGlFQURKO0FBRUk7QUFBQTtBQUFBLDhCQUFLLFdBQVUsY0FBZjtBQUNJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFDSyxxQ0FBS2QsS0FBTCxDQUFXRTtBQURoQiw2QkFESjtBQUlJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLG9CQUFmO0FBQUE7QUFDVyxxQ0FBS0YsS0FBTCxDQUFXRztBQUR0Qiw2QkFKSjtBQU9JO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFBQTtBQUNvQixxQ0FBS0gsS0FBTCxDQUFXSTtBQUQvQiw2QkFQSjtBQVVJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFBQTtBQUNZLHFDQUFLSixLQUFMLENBQVdLO0FBRHZCLDZCQVZKO0FBYUk7QUFBQTtBQUFBLGtDQUFLLFdBQVUsY0FBZjtBQUFBO0FBQUEsNkJBYko7QUFnQkksbUVBQUssV0FBVSxhQUFmO0FBaEJKLHlCQUZKO0FBdUJJLGlFQXZCSjtBQXdCSTtBQUFBO0FBQUEsOEJBQUssV0FBVSxjQUFmO0FBQ0ksbUVBQUssV0FBVSxjQUFmLEdBREo7QUFHSTtBQUFBO0FBQUEsa0NBQUssV0FBVSxvQkFBZjtBQUFBO0FBQUEsNkJBSEo7QUFNSTtBQUFBO0FBQUEsa0NBQUssV0FBVSxjQUFmO0FBQUE7QUFBQSw2QkFOSjtBQVNJO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLGNBQWY7QUFBQTtBQUFBLDZCQVRKO0FBWUk7QUFBQTtBQUFBLGtDQUFLLFdBQVUsY0FBZjtBQUFBO0FBQUEsNkJBWko7QUFlSSxtRUFBSyxXQUFVLGFBQWY7QUFmSjtBQXhCSjtBQUZKO0FBREosYUFESjtBQXFESDs7OztFQW5GZ0IsZ0JBQU1VLFM7O2tCQXNGWmpCLE0iLCJmaWxlIjoiMzk3LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcclxuaW1wb3J0IGF4aW9zIGZyb20gJ2F4aW9zJztcclxuXHJcbmNsYXNzIFRhdmVybiBleHRlbmRzIFJlYWN0LkNvbXBvbmVudCB7XHJcbiAgICBjb25zdHJ1Y3Rvcihwcm9wcyl7XHJcbiAgICAgICAgc3VwZXIocHJvcHMpO1xyXG4gICAgICAgIHRoaXMuc3RhdGUgPSB7XHJcbiAgICAgICAgICAgIHRhc2tfdGl0bGU6IG51bGwsXHJcbiAgICAgICAgICAgIHRhc2tfY29udGVudDogbnVsbCxcclxuICAgICAgICAgICAgdGFza190aW1lOiBudWxsLFxyXG4gICAgICAgICAgICB0YXNrX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFza19nb2xkX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFza19pdGVtX3Jld2FyZDogbnVsbCxcclxuICAgICAgICAgICAgdGFza19zcGVjaWFsX3Jld2FyZDogbnVsbFxyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIGNvbXBvbmVudERpZE1vdW50KCl7XHJcbiAgICAgICAgdmFyIHNlbGYgPSB0aGlzO1xyXG4gICAgICAgIGF4aW9zLmdldCgnaHR0cDovL2xvY2FsaG9zdDo4MDAwL3RhdmVybl9qc29uJylcclxuICAgICAgICAgICAgLnRoZW4oZnVuY3Rpb24gKHJlcykge1xyXG4gICAgICAgICAgICAgICAgc2VsZi5zZXRTdGF0ZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgdGFza190aXRsZTogcmVzLmRhdGEudGFza19pbmZvWyd0YXNrX3RpdGxlJ10sXHJcbiAgICAgICAgICAgICAgICAgICAgdGFza19jb250ZW50OiByZXMuZGF0YS50YXNrX2luZm9bJ3Rhc2tfY29udGVudCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2tfdGltZTogcmVzLmRhdGEudGFza19pbmZvWyd0YXNrX3RpbWUnXSxcclxuICAgICAgICAgICAgICAgICAgICB0YXNrX3Jld2FyZDogcmVzLmRhdGEudGFza19pbmZvWyd0YXNrX3Jld2FyZCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2tfZ29sZF9yZXdhcmQ6IHJlcy5kYXRhLnRhc2tfaW5mb1sndGFza19nb2xkX3Jld2FyZCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2tfaXRlbV9yZXdhcmQ6IHJlcy5kYXRhLnRhc2tfaW5mb1sndGFza19pdGVtX3Jld2FyZCddLFxyXG4gICAgICAgICAgICAgICAgICAgIHRhc2tfc3BlY2lhbF9yZXdhcmQ6IHJlcy5kYXRhLnRhc2tfaW5mb1sndGFza19zcGVjaWFsX3Jld2FyZCddXHJcbiAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICB9KVxyXG4gICAgfVxyXG5cclxuICAgIHJlbmRlcigpIHtcclxuICAgICAgICByZXR1cm4gKFxyXG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJhcl92aWV3XCI+XHJcbiAgICAgICAgICAgICAgICA8ZGl2IGlkPVwidGFzay1saXN0XCIgY2xhc3NOYW1lPVwiYXZhaWxhYmxlLXRhc2tzLWxpc3RcIj5cclxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY2xvc2UtaWNvblwiIGNsYXNzTmFtZT1cImNsb3NlLWljb25cIj48L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICA8dWw+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48L2xpPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcHJldmlld1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX2NvbnRlbnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7dGhpcy5zdGF0ZS50YXNrX2NvbnRlbnR9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19jb21wbGV0ZV90aW1lXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQ3phczoge3RoaXMuc3RhdGUudGFza190aW1lfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcmV3YXJkc1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERvxZt3aWFkY3plbmllOiB7dGhpcy5zdGF0ZS50YXNrX3Jld2FyZH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3Jld2FyZHNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBaxYJvdG86IHt0aGlzLnN0YXRlLnRhc2tfZ29sZF9yZXdhcmR9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFza19yZXdhcmRzXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgU3RhbWluYTpcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3NlbGVjdFwiPlxyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48L2xpPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcHJldmlld1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX2NvbnRlbnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX2NvbXBsZXRlX3RpbWVcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBDemFzOlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcmV3YXJkc1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERvxZt3aWFkY3plbmllOlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfcmV3YXJkc1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFrFgm90bzpcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YXNrX3Jld2FyZHNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTdGFtaW5hOlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhc2tfc2VsZWN0XCI+XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG5cclxuXHJcbiAgICAgICAgICAgICAgICAgICAgPC91bD5cclxuICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICApO1xyXG4gICAgfVxyXG59XHJcblxyXG5leHBvcnQgZGVmYXVsdCBUYXZlcm5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9UYXZlcm4uanMiXSwic291cmNlUm9vdCI6IiJ9");

/***/ })

})