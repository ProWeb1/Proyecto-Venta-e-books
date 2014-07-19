/********************************************
We wrap localStorage because accessing it on a
browser like FF that has cookies disabled breaks
altogether. To enable that to work we must wrap
all the native functions
*********************************************/
"use strict";var CPLocalStorage={init:function(){this._clearLocalStorageForEveryPageButEditorPages()},_clearLocalStorageForEveryPageButEditorPages:function(){var e=document.location.pathname,t=e.match(/\/(live|pen|collab|professor|details|pres|bye|boomerang|write)/);t||this.clear()},clear:function(){this._exec(function(){localStorage.clear()})},setItem:function(e,t){this._exec(function(){localStorage.setItem(e,t)})},getItem:function(e){return this._exec(function(){return localStorage.getItem(e)})},removeItem:function(e){this._exec(function(){localStorage.removeItem(e)})},_exec:function(e){try{return e()}catch(t){}}};CPLocalStorage.init();