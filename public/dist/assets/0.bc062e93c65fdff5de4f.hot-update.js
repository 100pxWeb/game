webpackHotUpdate(0,{

/***/ 307:
/***/ (function(module, exports, __webpack_require__) {

	eval("/* WEBPACK VAR INJECTION */(function(module) {/* REACT HOT LOADER */ if (true) { (function () { var ReactHotAPI = __webpack_require__(78), RootInstanceProvider = __webpack_require__(86), ReactMount = __webpack_require__(88), React = __webpack_require__(178); module.makeHot = module.hot.data ? module.hot.data.makeHot : ReactHotAPI(function () { return RootInstanceProvider.getRootInstances(ReactMount); }, React); })(); } try { (function () {\n\n'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nvar _react = __webpack_require__(178);\n\nvar _react2 = _interopRequireDefault(_react);\n\nvar _reactRouterDom = __webpack_require__(311);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }\n\nfunction _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }\n\nvar AppComponent = function (_React$Component) {\n    _inherits(AppComponent, _React$Component);\n\n    function AppComponent(props) {\n        _classCallCheck(this, AppComponent);\n\n        var _this = _possibleConstructorReturn(this, (AppComponent.__proto__ || Object.getPrototypeOf(AppComponent)).call(this, props));\n\n        _this.state = {\n            gold: null,\n            exp: null,\n            stamina: null\n        };\n        return _this;\n    }\n\n    _createClass(AppComponent, [{\n        key: 'render',\n        value: function render() {\n            return _react2.default.createElement(\n                _reactRouterDom.BrowserRouter,\n                null,\n                _react2.default.createElement(\n                    'div',\n                    { className: 'game_render' },\n                    _react2.default.createElement('div', { className: 'upper_panel' }),\n                    _react2.default.createElement(\n                        'div',\n                        { className: 'main_handler' },\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'option_bar' },\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'logout' },\n                                _react2.default.createElement(\n                                    'a',\n                                    { href: 'http://[::1]/game/logout' },\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        'Wyloguj'\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    'div',\n                                    { className: 'gold' },\n                                    _react2.default.createElement('div', { className: 'icon' }),\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        this.state.gold\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    'div',\n                                    { className: 'exp' },\n                                    _react2.default.createElement('div', { className: 'icon' }),\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        this.state.exp\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    'div',\n                                    { className: 'stamina' },\n                                    _react2.default.createElement('div', { className: 'icon' }),\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        this.state.stamina\n                                    )\n                                )\n                            ),\n                            _react2.default.createElement(\n                                'div',\n                                { className: 'options' },\n                                _react2.default.createElement(\n                                    _reactRouterDom.Link,\n                                    { to: '/' },\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        'Miasto'\n                                    )\n                                ),\n                                _react2.default.createElement(\n                                    _reactRouterDom.Link,\n                                    { to: '/tavern' },\n                                    _react2.default.createElement(\n                                        'span',\n                                        null,\n                                        'Tawerna'\n                                    )\n                                )\n                            )\n                        ),\n                        _react2.default.createElement(\n                            'div',\n                            { className: 'load_game' },\n                            _react2.default.createElement('div', { className: 'border' })\n                        )\n                    )\n                )\n            );\n        }\n    }]);\n\n    return AppComponent;\n}(_react2.default.Component);\n\nAppComponent.defaultProps = {};\n\nexports.default = AppComponent;\n\n/* REACT HOT LOADER */ }).call(this); } finally { if (true) { (function () { var foundReactClasses = module.hot.data && module.hot.data.foundReactClasses || false; if (module.exports && module.makeHot) { var makeExportsHot = __webpack_require__(308); if (makeExportsHot(module, __webpack_require__(178))) { foundReactClasses = true; } var shouldAcceptModule = true && foundReactClasses; if (shouldAcceptModule) { module.hot.accept(function (err) { if (err) { console.error(\"Cannot apply hot update to \" + \"Main.js\" + \": \" + err.message); } }); } } module.hot.dispose(function (data) { data.makeHot = module.makeHot; data.foundReactClasses = foundReactClasses; }); })(); } }\n/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)(module)))//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9NYWluLmpzP2ExZDAiXSwibmFtZXMiOlsiQXBwQ29tcG9uZW50IiwicHJvcHMiLCJzdGF0ZSIsImdvbGQiLCJleHAiLCJzdGFtaW5hIiwiQ29tcG9uZW50IiwiZGVmYXVsdFByb3BzIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7Ozs7QUFDQTs7Ozs7Ozs7OztJQU1NQSxZOzs7QUFDRiwwQkFBWUMsS0FBWixFQUFrQjtBQUFBOztBQUFBLGdJQUNSQSxLQURROztBQUVkLGNBQUtDLEtBQUwsR0FBYTtBQUNUQyxrQkFBTSxJQURHO0FBRVRDLGlCQUFLLElBRkk7QUFHVEMscUJBQVM7QUFIQSxTQUFiO0FBRmM7QUFPakI7Ozs7aUNBQ007QUFDUCxtQkFDSTtBQUFBO0FBQUE7QUFDQTtBQUFBO0FBQUEsc0JBQUssV0FBVSxhQUFmO0FBQ0UsMkRBQUssV0FBVSxhQUFmLEdBREY7QUFJRTtBQUFBO0FBQUEsMEJBQUssV0FBVSxjQUFmO0FBRUE7QUFBQTtBQUFBLDhCQUFLLFdBQVUsWUFBZjtBQUNBO0FBQUE7QUFBQSxrQ0FBSyxXQUFVLFFBQWY7QUFDQTtBQUFBO0FBQUEsc0NBQUcsTUFBSywwQkFBUjtBQUFtQztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQW5DLGlDQURBO0FBRUo7QUFBQTtBQUFBLHNDQUFLLFdBQVUsTUFBZjtBQUNJLDJFQUFLLFdBQVUsTUFBZixHQURKO0FBRUk7QUFBQTtBQUFBO0FBQU8sNkNBQUtILEtBQUwsQ0FBV0M7QUFBbEI7QUFGSixpQ0FGSTtBQU1KO0FBQUE7QUFBQSxzQ0FBSyxXQUFVLEtBQWY7QUFDSSwyRUFBSyxXQUFVLE1BQWYsR0FESjtBQUVJO0FBQUE7QUFBQTtBQUFPLDZDQUFLRCxLQUFMLENBQVdFO0FBQWxCO0FBRkosaUNBTkk7QUFVSjtBQUFBO0FBQUEsc0NBQUssV0FBVSxTQUFmO0FBQ0ksMkVBQUssV0FBVSxNQUFmLEdBREo7QUFFSTtBQUFBO0FBQUE7QUFBTyw2Q0FBS0YsS0FBTCxDQUFXRztBQUFsQjtBQUZKO0FBVkksNkJBREE7QUFnQko7QUFBQTtBQUFBLGtDQUFLLFdBQVUsU0FBZjtBQUNJO0FBQUE7QUFBQSxzQ0FBTSxJQUFHLEdBQVQ7QUFBYTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQWIsaUNBREo7QUFFQTtBQUFBO0FBQUEsc0NBQU0sSUFBRyxTQUFUO0FBQW1CO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBbkI7QUFGQTtBQWhCSSx5QkFGQTtBQTBCSjtBQUFBO0FBQUEsOEJBQUssV0FBVSxXQUFmO0FBQ0ksbUVBQUssV0FBVSxRQUFmO0FBREo7QUExQkk7QUFKRjtBQURBLGFBREo7QUF5Q0Q7Ozs7RUFuRHdCLGdCQUFNQyxTOztBQXNEakNOLGFBQWFPLFlBQWIsR0FBNEIsRUFBNUI7O2tCQUdlUCxZIiwiZmlsZSI6IjMwNy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBSZWFjdCBmcm9tICdyZWFjdCc7XG5pbXBvcnQge1xuICAgIEJyb3dzZXJSb3V0ZXIgYXMgUm91dGVyLFxuICAgIFJvdXRlLFxuICAgIExpbmtcbn0gZnJvbSAncmVhY3Qtcm91dGVyLWRvbSc7XG5cbmNsYXNzIEFwcENvbXBvbmVudCBleHRlbmRzIFJlYWN0LkNvbXBvbmVudCB7XG4gICAgY29uc3RydWN0b3IocHJvcHMpe1xuICAgICAgICBzdXBlcihwcm9wcyk7XG4gICAgICAgIHRoaXMuc3RhdGUgPSB7XG4gICAgICAgICAgICBnb2xkOiBudWxsLFxuICAgICAgICAgICAgZXhwOiBudWxsLFxuICAgICAgICAgICAgc3RhbWluYTogbnVsbFxuICAgICAgICB9XG4gICAgfVxuICByZW5kZXIoKSB7XG4gICAgcmV0dXJuIChcbiAgICAgICAgPFJvdXRlcj5cbiAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJnYW1lX3JlbmRlclwiPlxuICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidXBwZXJfcGFuZWxcIj5cblxuICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibWFpbl9oYW5kbGVyXCI+XG5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm9wdGlvbl9iYXJcIj5cbiAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImxvZ291dFwiPlxuICAgICAgICAgIDxhIGhyZWY9XCJodHRwOi8vWzo6MV0vZ2FtZS9sb2dvdXRcIj48c3Bhbj5XeWxvZ3VqPC9zcGFuPjwvYT5cbiAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZ29sZFwiPlxuICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaWNvblwiPjwvZGl2PlxuICAgICAgICAgIDxzcGFuPnt0aGlzLnN0YXRlLmdvbGR9PC9zcGFuPlxuICAgICAgPC9kaXY+XG4gICAgICA8ZGl2IGNsYXNzTmFtZT1cImV4cFwiPlxuICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaWNvblwiPjwvZGl2PlxuICAgICAgICAgIDxzcGFuPnt0aGlzLnN0YXRlLmV4cH08L3NwYW4+XG4gICAgICA8L2Rpdj5cbiAgICAgIDxkaXYgY2xhc3NOYW1lPVwic3RhbWluYVwiPlxuICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaWNvblwiPjwvZGl2PlxuICAgICAgICAgIDxzcGFuPnt0aGlzLnN0YXRlLnN0YW1pbmF9PC9zcGFuPlxuICAgICAgPC9kaXY+XG4gICAgICA8L2Rpdj5cbiAgICAgIDxkaXYgY2xhc3NOYW1lPVwib3B0aW9uc1wiPlxuICAgICAgICAgIDxMaW5rIHRvPVwiL1wiPjxzcGFuPk1pYXN0bzwvc3Bhbj48L0xpbms+XG4gICAgICA8TGluayB0bz1cIi90YXZlcm5cIj48c3Bhbj5UYXdlcm5hPC9zcGFuPjwvTGluaz5cbiAgICAgIDwvZGl2PlxuXG5cbiAgICAgIDwvZGl2PlxuXG4gICAgICA8ZGl2IGNsYXNzTmFtZT1cImxvYWRfZ2FtZVwiPlxuICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9yZGVyXCI+PC9kaXY+XG4gXG4gICAgICA8L2Rpdj5cbiAgICAgIDwvZGl2PlxuXG4gICAgICA8L2Rpdj5cbiAgICAgIDwvUm91dGVyPlxuICAgICk7XG4gIH1cbn1cblxuQXBwQ29tcG9uZW50LmRlZmF1bHRQcm9wcyA9IHtcbn07XG5cbmV4cG9ydCBkZWZhdWx0IEFwcENvbXBvbmVudDtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3RlbXBsYXRlcy9jb21wb25lbnRzL01haW4uanMiXSwic291cmNlUm9vdCI6IiJ9");

/***/ })

})