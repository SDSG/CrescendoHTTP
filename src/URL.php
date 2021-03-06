<?php
namespace Crescendo\HTTP;

interface URL
{
    public function __construct(array $parts = []);
    
    public function getScheme();
    
    public function setScheme($scheme);
    
    public function getHost();
    
    public function setHost($host);
    
    public function getPort();
    
    public function setPort($port);
    
    public function getPath();
    
    public function setPath($path);
    
    public function getQuery();
    
    public function setQuery($query);
    
    public function getFragment();
    
    public function setFragment();
}