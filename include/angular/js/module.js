var app = angular.module('hrv', [],
        function ($interpolateProvider) 
        {
            $interpolateProvider.startSymbol('(:');
            $interpolateProvider.endSymbol(':)');
        }
);