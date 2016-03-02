/*
 * Copyright © 2014 - 2016 Kristian Matthews. All rights reserved.
 */

/*global angular */
angular.module('polar', ['ngAnimate', 'ngMessages']);

/*global require */
require('./run.js');
require('./controllers/admin/schools.js');
require('./controllers/auth.js');
require('./directives/match.js');
require('./directives/unique.js');
require('./directives/trianglify.js');
require('./factories/schoolModel.js');
require('./factories/url.js');
require('./values/emailItem.js');
require('./values/schoolItem.js');
require('./values/userItem.js');