<?php
namespace Ackintosh\Ganesha\Storage;

interface AdapterInterface
{
    /**
     * @param  string $serviceName
     * @return int
     */
    public function load($serviceName);

    /**
     * @param  string $serviceName
     * @param  int    $count
     * @return void
     */
    public function save($serviceName, $count);

    /**
     * @param  string $serviceName
     * @return void
     */
    public function increment($serviceName);

    /**
     * @param  string $serviceName
     * @return void
     */
    public function decrement($serviceName);

    /**
     * sets last failure time
     *
     * @param  float $lastFailureTime
     * @return void
     */
    public function saveLastFailureTime($lastFailureTime);

    /**
     * returns last failure time
     *
     * @return float | null
     */
    public function loadLastFailureTime();

    /**
     * sets status
     *
     * @param  int $status
     * @return void
     */
    public function saveStatus($status);

    /**
     * returns status
     *
     * @return int
     */
    public function loadStatus();
}