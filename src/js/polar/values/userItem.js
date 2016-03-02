/*
 * Copyright © 2014 - 2016 Kristian Matthews. All rights reserved.
 */

/**
 * User item.
 */

/*global angular */
angular.module('polar').value('userItem', {
    userId: undefined,
    firstName: undefined,
    lastName: undefined,
    emails: [],
    password: undefined,
    passwordHash: undefined
});