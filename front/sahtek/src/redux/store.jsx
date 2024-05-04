import { createStore, applyMiddleware } from 'redux';
import {thunk} from 'redux-thunk';
import clientReducer from './reducers';

const store = createStore(clientReducer, applyMiddleware(thunk));

export default store;