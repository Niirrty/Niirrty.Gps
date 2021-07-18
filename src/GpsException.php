<?php
/**
 * @author     Ni Irrty <niirrty+code@gmail.com>
 * @copyright  © 2017-2021, Ni Irrty
 * @package    Niirrty\Gps
 * @since      2017-11-02
 * @version    0.4.0
 */


declare( strict_types=1 );


namespace Niirrty\Gps;


use \Niirrty\NiirrtyException;


class GpsException extends NiirrtyException
{


    #region // – – –   C O N S T A N T S   – – – – – – – – – – – – – – – – – – – – – – – – – – – – –

    /**
     * An Error depending to an invalid direction.
     */
    public const ERROR_TYPE_DIRECTION = 'direction';

    /**
     * An Error depending to an invalid degree value.
     */
    public const ERROR_TYPE_DEGREES = 'degrees';

    /**
     * An Error depending to an invalid minutes value.
     */
    public const ERROR_TYPE_MINUTES = 'minutes';

    /**
     * An Error depending to an invalid seconds value.
     */
    public const ERROR_TYPE_SECONDS = 'seconds';

    #endregion


    #region // – – –   P U B L I C   C O N S T R U C T O R   – – – – – – – – – – – – – – – – – – – –

    /**
     * Init a new instance.
     *
     * @param string         $type      The type (see {@see \Niirrty\Gps\GpsException}}::ERROR_TYPE* constants)
     * @param string|null    $msg       An optional error message
     * @param mixed          $code      The optional error code
     * @param \Throwable|null $previous An optional previous error/exception
     */
    public function __construct( protected string $type, string $msg = null, $code = 256, ?\Throwable $previous = null )
    {

        parent::__construct(
            \sprintf( 'Invalid or unknown value for a geo coordinate "%s" element/part!', $type )
            . static::appendMessage( $msg ),
            $code,
            $previous
        );

    }

    #endregion


    #region // – – –   P U B L I C   M E T H O D S   – – – – – – – – – – – – – – – – – – – – – – – –

    /**
     * Returns the error type.
     *
     * @return string
     */
    public final function getType(): string
    {

        return $this->type;
    }

    #endregion


}

