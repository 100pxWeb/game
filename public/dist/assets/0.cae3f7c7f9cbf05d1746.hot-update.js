webpackHotUpdate(0,{

/***/ 307:
/***/ (function(module, exports, __webpack_require__) {

	eval("/* WEBPACK VAR INJECTION */(function(module) {/* REACT HOT LOADER */ if (true) { (function () { var ReactHotAPI = __webpack_require__(78), RootInstanceProvider = __webpack_require__(86), ReactMount = __webpack_require__(88), React = __webpack_require__(178); module.makeHot = module.hot.data ? module.hot.data.makeHot : ReactHotAPI(function () { return RootInstanceProvider.getRootInstances(ReactMount); }, React); })(); } try { (function () {\n\n'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nvar _react = __webpack_require__(178);\n\nvar _react2 = _interopRequireDefault(_react);\n\nvar _reactRouterDom = __webpack_require__(308);\n\nvar _axios = __webpack_require__(348);\n\nvar _axios2 = _interopRequireDefault(_axios);\n\nvar _Redux_store = __webpack_require__(374);\n\nvar _Redux_store2 = _interopRequireDefault(_Redux_store);\n\nvar _Tavern = __webpack_require__(397);\n\nvar _Tavern2 = _interopRequireDefault(_Tavern);\n\nvar _City = __webpack_require__(398);\n\nvar _City2 = _interopRequireDefault(_City);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }\n\nfunction _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }\n\nvar AppComponent = function (_React$Component) {\n    _inherits(AppComponent, _React$Component);\n\n    function AppComponent(props) {\n        _classCallCheck(this, AppComponent);\n\n        var _this = _possibleConstructorReturn(this, (AppComponent.__proto__ || Object.getPrototypeOf(AppComponent)).call(this, props));\n\n        _this.state = {\n            user_id: '',\n            user_nick: '123',\n            logged: false,\n\n            gold: null,\n            exp: null,\n            stamina: null\n        };\n        return _this;\n    }\n\n    _createClass(AppComponent, [{\n        key: 'componentWillMount',\n        value: function componentWillMount() {\n            var self = this;\n\n            _axios2.default.get('http://localhost:8000/controll_json').then(function (response) {\n                console.log(response);\n                console.log(response.data.user_info[0]);\n            });\n        }\n    }, {\n        key: 'render',\n        value: function render() {\n            return _react2.default.createElement(\n                _reactRouterDom.BrowserRouter,\n                null,\n                _react2.default.createElement(\n                    'div',\n                    { className: 'game_render' },\n                    _react2.default.createElement('div', { className: 'upper_panel' }),\n                    _react2.default.createElement(\n                        'div',\n                        { className: 'main_handler' },\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'option_bar' },\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'logout' },\n                                _react2.default.createElement(\n                                    'a',\n                                    { href: 'http://[::1]/game/logout' },\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        'Wyloguj'\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    'div',\n                                    { className: 'gold' },\n                                    _react2.default.createElement('div', { className: 'icon' }),\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        this.state.gold\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    'div',\n                                    { className: 'exp' },\n                                    _react2.default.createElement('div', { className: 'icon' }),\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        this.state.exp\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    'div',\n                                    { className: 'stamina' },\n                                    _react2.default.createElement('div', { className: 'icon' }),\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        this.state.stamina\n                                    )\n                                )\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'options' },\n                                _react2.default.createElement(\n                                    _reactRouterDom.Link,\n                                    { to: '/' },\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        'Miasto'\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    _reactRouterDom.Link,\n                                    { to: '/tavern' },\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        'Tawerna'\n                                    )\n                                )\n                            )\n                        ),\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'load_game' },\n                            _react2.default.createElement('div', { className: 'border' }),\n                            _react2.default.createElement(_reactRouterDom.Route, { exact: true, path: '/', component: _City2.default }),\n                            _react2.default.createElement(_reactRouterDom.Route, { path: '/tavern', component: _Tavern2.default })\n                        )\n                    )\n                )\n            );\n        }\n    }]);\n\n    return AppComponent;\n}(_react2.default.Component);\n\nAppComponent.defaultProps = {};\n\nexports.default = AppComponent;\n\n/* REACT HOT LOADER */ }).call(this); } finally { if (true) { (function () { var foundReactClasses = module.hot.data && module.hot.data.foundReactClasses || false; if (module.exports && module.makeHot) { var makeExportsHot = __webpack_require__(394); if (makeExportsHot(module, __webpack_require__(178))) { foundReactClasses = true; } var shouldAcceptModule = true && foundReactClasses; if (shouldAcceptModule) { module.hot.accept(function (err) { if (err) { console.error(\"Cannot apply hot update to \" + \"Main.js\" + \": \" + err.message); } }); } } module.hot.dispose(function (data) { data.makeHot = module.makeHot; data.foundReactClasses = foundReactClasses; }); })(); } }\n/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)(module)))//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9NYWluLmpzP2ExZDAiXSwibmFtZXMiOlsiQXBwQ29tcG9uZW50IiwicHJvcHMiLCJzdGF0ZSIsInVzZXJfaWQiLCJ1c2VyX25pY2siLCJsb2dnZWQiLCJnb2xkIiwiZXhwIiwic3RhbWluYSIsInNlbGYiLCJnZXQiLCJ0aGVuIiwicmVzcG9uc2UiLCJjb25zb2xlIiwibG9nIiwiZGF0YSIsInVzZXJfaW5mbyIsIkNvbXBvbmVudCIsImRlZmF1bHRQcm9wcyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBOzs7O0FBQ0E7O0FBS0E7Ozs7QUFDQTs7OztBQUVBOzs7O0FBQ0E7Ozs7Ozs7Ozs7OztJQUVNQSxZOzs7QUFDRiwwQkFBWUMsS0FBWixFQUFrQjtBQUFBOztBQUFBLGdJQUNSQSxLQURROztBQUVkLGNBQUtDLEtBQUwsR0FBYTtBQUNUQyxxQkFBUyxFQURBO0FBRVRDLHVCQUFXLEtBRkY7QUFHVEMsb0JBQVEsS0FIQzs7QUFLVEMsa0JBQU0sSUFMRztBQU1UQyxpQkFBSyxJQU5JO0FBT1RDLHFCQUFTO0FBUEEsU0FBYjtBQUZjO0FBV2pCOzs7OzZDQUNtQjtBQUNoQixnQkFBSUMsT0FBTyxJQUFYOztBQUVBLDRCQUFNQyxHQUFOLENBQVUscUNBQVYsRUFDS0MsSUFETCxDQUNVLFVBQVVDLFFBQVYsRUFBb0I7QUFDdEJDLHdCQUFRQyxHQUFSLENBQVlGLFFBQVo7QUFDQUMsd0JBQVFDLEdBQVIsQ0FBWUYsU0FBU0csSUFBVCxDQUFjQyxTQUFkLENBQXdCLENBQXhCLENBQVo7QUFDSCxhQUpMO0FBS0g7OztpQ0FDTTtBQUNQLG1CQUNJO0FBQUE7QUFBQTtBQUNBO0FBQUE7QUFBQSxzQkFBSyxXQUFVLGFBQWY7QUFDRSwyREFBSyxXQUFVLGFBQWYsR0FERjtBQUlFO0FBQUE7QUFBQSwwQkFBSyxXQUFVLGNBQWY7QUFFQTtBQUFBO0FBQUEsOEJBQUssV0FBVSxZQUFmO0FBQ0E7QUFBQTtBQUFBLGtDQUFLLFdBQVUsUUFBZjtBQUNBO0FBQUE7QUFBQSxzQ0FBRyxNQUFLLDBCQUFSO0FBQW1DO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBbkMsaUNBREE7QUFFSjtBQUFBO0FBQUEsc0NBQUssV0FBVSxNQUFmO0FBQ0ksMkVBQUssV0FBVSxNQUFmLEdBREo7QUFFSTtBQUFBO0FBQUE7QUFBTyw2Q0FBS2QsS0FBTCxDQUFXSTtBQUFsQjtBQUZKLGlDQUZJO0FBTUo7QUFBQTtBQUFBLHNDQUFLLFdBQVUsS0FBZjtBQUNJLDJFQUFLLFdBQVUsTUFBZixHQURKO0FBRUk7QUFBQTtBQUFBO0FBQU8sNkNBQUtKLEtBQUwsQ0FBV0s7QUFBbEI7QUFGSixpQ0FOSTtBQVVKO0FBQUE7QUFBQSxzQ0FBSyxXQUFVLFNBQWY7QUFDSSwyRUFBSyxXQUFVLE1BQWYsR0FESjtBQUVJO0FBQUE7QUFBQTtBQUFPLDZDQUFLTCxLQUFMLENBQVdNO0FBQWxCO0FBRko7QUFWSSw2QkFEQTtBQWdCSjtBQUFBO0FBQUEsa0NBQUssV0FBVSxTQUFmO0FBQ0k7QUFBQTtBQUFBLHNDQUFNLElBQUcsR0FBVDtBQUFhO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBYixpQ0FESjtBQUVBO0FBQUE7QUFBQSxzQ0FBTSxJQUFHLFNBQVQ7QUFBbUI7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFuQjtBQUZBO0FBaEJJLHlCQUZBO0FBMEJKO0FBQUE7QUFBQSw4QkFBSyxXQUFVLFdBQWY7QUFDSSxtRUFBSyxXQUFVLFFBQWYsR0FESjtBQUVJLG1GQUFPLFdBQVAsRUFBYSxNQUFLLEdBQWxCLEVBQXNCLHlCQUF0QixHQUZKO0FBR0ksbUZBQU8sTUFBSyxTQUFaLEVBQXNCLDJCQUF0QjtBQUhKO0FBMUJJO0FBSkY7QUFEQSxhQURKO0FBMENEOzs7O0VBakV3QixnQkFBTVMsUzs7QUFvRWpDakIsYUFBYWtCLFlBQWIsR0FBNEIsRUFBNUI7O2tCQUdlbEIsWSIsImZpbGUiOiIzMDcuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgUmVhY3QgZnJvbSAncmVhY3QnO1xuaW1wb3J0IHtcbiAgICBCcm93c2VyUm91dGVyIGFzIFJvdXRlcixcbiAgICBSb3V0ZSxcbiAgICBMaW5rXG59IGZyb20gJ3JlYWN0LXJvdXRlci1kb20nO1xuaW1wb3J0IGF4aW9zIGZyb20gJ2F4aW9zJztcbmltcG9ydCBzdG9yZSBmcm9tICcuL1JlZHV4X3N0b3JlJztcblxuaW1wb3J0IFRhdmVybiBmcm9tICcuL1RhdmVybic7XG5pbXBvcnQgQ2l0eSBmcm9tICcuL0NpdHknO1xuXG5jbGFzcyBBcHBDb21wb25lbnQgZXh0ZW5kcyBSZWFjdC5Db21wb25lbnQge1xuICAgIGNvbnN0cnVjdG9yKHByb3BzKXtcbiAgICAgICAgc3VwZXIocHJvcHMpO1xuICAgICAgICB0aGlzLnN0YXRlID0ge1xuICAgICAgICAgICAgdXNlcl9pZDogJycsXG4gICAgICAgICAgICB1c2VyX25pY2s6ICcxMjMnLFxuICAgICAgICAgICAgbG9nZ2VkOiBmYWxzZSxcblxuICAgICAgICAgICAgZ29sZDogbnVsbCxcbiAgICAgICAgICAgIGV4cDogbnVsbCxcbiAgICAgICAgICAgIHN0YW1pbmE6IG51bGxcbiAgICAgICAgfTtcbiAgICB9XG4gICAgY29tcG9uZW50V2lsbE1vdW50KCl7XG4gICAgICAgIHZhciBzZWxmID0gdGhpcztcblxuICAgICAgICBheGlvcy5nZXQoJ2h0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250cm9sbF9qc29uJylcbiAgICAgICAgICAgIC50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKHJlc3BvbnNlKTtcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhyZXNwb25zZS5kYXRhLnVzZXJfaW5mb1swXSk7XG4gICAgICAgICAgICB9KVxuICAgIH1cbiAgcmVuZGVyKCkge1xuICAgIHJldHVybiAoXG4gICAgICAgIDxSb3V0ZXI+XG4gICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZ2FtZV9yZW5kZXJcIj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInVwcGVyX3BhbmVsXCI+XG5cbiAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1haW5faGFuZGxlclwiPlxuXG4gICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJvcHRpb25fYmFyXCI+XG4gICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJsb2dvdXRcIj5cbiAgICAgICAgICA8YSBocmVmPVwiaHR0cDovL1s6OjFdL2dhbWUvbG9nb3V0XCI+PHNwYW4+V3lsb2d1ajwvc3Bhbj48L2E+XG4gICAgICA8ZGl2IGNsYXNzTmFtZT1cImdvbGRcIj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImljb25cIj48L2Rpdj5cbiAgICAgICAgICA8c3Bhbj57dGhpcy5zdGF0ZS5nb2xkfTwvc3Bhbj5cbiAgICAgIDwvZGl2PlxuICAgICAgPGRpdiBjbGFzc05hbWU9XCJleHBcIj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImljb25cIj48L2Rpdj5cbiAgICAgICAgICA8c3Bhbj57dGhpcy5zdGF0ZS5leHB9PC9zcGFuPlxuICAgICAgPC9kaXY+XG4gICAgICA8ZGl2IGNsYXNzTmFtZT1cInN0YW1pbmFcIj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImljb25cIj48L2Rpdj5cbiAgICAgICAgICA8c3Bhbj57dGhpcy5zdGF0ZS5zdGFtaW5hfTwvc3Bhbj5cbiAgICAgIDwvZGl2PlxuICAgICAgPC9kaXY+XG4gICAgICA8ZGl2IGNsYXNzTmFtZT1cIm9wdGlvbnNcIj5cbiAgICAgICAgICA8TGluayB0bz1cIi9cIj48c3Bhbj5NaWFzdG88L3NwYW4+PC9MaW5rPlxuICAgICAgPExpbmsgdG89XCIvdGF2ZXJuXCI+PHNwYW4+VGF3ZXJuYTwvc3Bhbj48L0xpbms+XG4gICAgICA8L2Rpdj5cblxuXG4gICAgICA8L2Rpdj5cblxuICAgICAgPGRpdiBjbGFzc05hbWU9XCJsb2FkX2dhbWVcIj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJvcmRlclwiPjwvZGl2PlxuICAgICAgICAgIDxSb3V0ZSBleGFjdCBwYXRoPVwiL1wiIGNvbXBvbmVudD17Q2l0eX0gLz5cbiAgICAgICAgICA8Um91dGUgcGF0aD1cIi90YXZlcm5cIiBjb21wb25lbnQ9e1RhdmVybn0gLz5cbiAgICAgIDwvZGl2PlxuICAgICAgPC9kaXY+XG5cbiAgICAgIDwvZGl2PlxuICAgICAgPC9Sb3V0ZXI+XG4gICAgKTtcbiAgfVxufVxuXG5BcHBDb21wb25lbnQuZGVmYXVsdFByb3BzID0ge1xufTtcblxuZXhwb3J0IGRlZmF1bHQgQXBwQ29tcG9uZW50O1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vdGVtcGxhdGVzL2NvbXBvbmVudHMvTWFpbi5qcyJdLCJzb3VyY2VSb290IjoiIn0=");

/***/ })

})